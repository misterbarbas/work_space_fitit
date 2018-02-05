$(document).ready(function(){
	
	// Ejecutamos init metodo que revisa los timeouts para chequear nuevos mensajes de chats y usuarios online
	chat.init();
	
});

var chat = {
	
	// data con variables para usar en clase:
	
	data : {
		lastID 		: 0,
		noActivity	: 0
	},
	
	// Init con eventos listeners y sets up timers:
	
	init : function(){
		
		// Using the defaultText jQuery plugin, included at the bottom:
		$('#name').defaultText('Nombre');
		$('#email').defaultText('Mensaje');
		
		// Convertimos #chatLineHolder div en  jScrollPane,
		// y salvamos el plugin de la API en chat.data:
		
		chat.data.jspAPI = $('#chatLineHolder').jScrollPane({
			verticalDragMinHeight: 12,
			verticalDragMaxHeight: 12
		}).data('jsp');
		
		// Usamos working como boolean para evitar varios logueos a la vez.
		
 			var working = false;
		
		// Logueamos la persona en el chat
		
		$('#loginForm').submit(function(){
			
			if(working) return false;
			working = true;
			
			// tzPOST wrapper function customizada
			// (definida abajo del todo):
			
			$.tzPOST('login',$(this).serialize(),function(r){
				working = false;
				
				if(r.error){
					chat.displayError(r.error);
				}
				else chat.login(r.name,r.gravatar);
			});
			
			return false;
		});
		
		// Enviar mensajes
		
		$('#submitForm').submit(function(){
			
			var text = $('#chatText').val();
			
			if(text.length == 0){
				return false;
			}
			
			if(working) return false;
			working = true;
			
			// Asigna un temporal ID al chat
			var tempID = 't'+Math.round(Math.random()*1000000),
				params = {
					id			: tempID,
					author		: chat.data.name,
					gravatar	: chat.data.gravatar,
					text		: text.replace(/</g,'&lt;').replace(/>/g,'&gt;')
				};

			// Usamos addChatLine metodo para añadir el chat (inmediatamente por pantalla)
			
			chat.addChatLine($.extend({},params));
			
			// Usamos tzPOST wrapper para enviar el chat
			// via a POST AJAX request:
			
			$.tzPOST('submitChat',$(this).serialize(),function(r){
				working = false;
				
				$('#chatText').val('');
				$('div.chat-'+tempID).remove();
				
				params['id'] = r.insertID;
				chat.addChatLine($.extend({},params));
			});
			
			return false;
		});
		
		// Cuando el usuario sale
		
		$('a.logoutButton').live('click',function(){
			
			$('#chatTopBar > span').fadeOut(function(){
				$(this).remove();
			});
			
			$('#submitForm').fadeOut(function(){
				$('#loginForm').fadeIn();
			});
			
			$.tzPOST('logout');
			
			return false;
		});
		
		// Checkeamos que el usuarios haya sido logged (browser refresh)
		
		$.tzGET('checkLogged',function(r){
			if(r.logged){
				chat.login(r.loggedAs.name,r.loggedAs.gravatar);
			}
		});
		
		// timeout
		
		(function getChatsTimeoutFunction(){
			chat.getChats(getChatsTimeoutFunction);
		})();
		
		(function getUsersTimeoutFunction(){
			chat.getUsers(getUsersTimeoutFunction);
		})();
		
	},
	
	// El login method esconde el display
	// usuario logueado muetra el submit form (enviar mensaje)
	
	login : function(name,gravatar){
		
		chat.data.name = name;
		chat.data.gravatar = gravatar;
		$('#chatTopBar').html(chat.render('loginTopBar',chat.data));
		
		$('#loginForm').fadeOut(function(){
			$('#submitForm').fadeIn();
			$('#chatText').focus();
		});
		
	},
	
	//Genera el markup del HTML
	
	render : function(template,params){
		
		var arr = [];
		switch(template){
			case 'loginTopBar':
				arr = [
				'<span><img src="',params.gravatar,'" width="23" height="23" />',
				'<span class="name">',params.name,
				'</span><a href="" class="logoutButton rounded">Logout</a></span>'];
			break;
			
			case 'chatLine':
				arr = [
					'<div class="chat chat-',params.id,' rounded"><span class="gravatar"><img src="',params.gravatar,
					'" width="23" height="23" onload="this.style.visibility=\'visible\'" />','</span><span class="author">',params.author,
					':</span><span class="text">',params.text,'</span><span class="time">',params.time,'</span></div>'];
			break;
			
			case 'user':
				arr = [
					'<div class="user" title="',params.name,'"><img src="',
					params.gravatar,'" width="30" height="30" onload="this.style.visibility=\'visible\'" /></div>'
				];
			break;
		}
		
		// array join que es mas rapido que la concadenacion
		
		return arr.join('');
		
	},
	
	//addChatLine añade los mensajes al chat
	
	addChatLine : function(params){
		
		// Utilizamos nuestra zona horaria.
		
		var d = new Date();
		if(params.time) {
			
			// devuelve el time en UTC (GMT). Lo usamos para el objeto.
			// Js lo transforma
			
			d.setUTCHours(params.time.hours,params.time.minutes);
		}
		
		params.time = (d.getHours() < 10 ? '0' : '' ) + d.getHours()+':'+
					  (d.getMinutes() < 10 ? '0':'') + d.getMinutes();
		
		var markup = chat.render('chatLine',params),
			exists = $('#chatLineHolder .chat-'+params.id);

		if(exists.length){
			exists.remove();
		}
		
		if(!chat.data.lastID){
			// Si es el primer mensaje, lo remieve indicando there arent any
			
			$('#chatLineHolder p').remove();
		}
		
		// Si no es un chat temporal
		if(params.id.toString().charAt(0) != 't'){
			var previous = $('#chatLineHolder .chat-'+(+params.id - 1));
			if(previous.length){
				previous.after(markup);
			}
			else chat.data.jspAPI.getContentPane().append(markup);
		}
		else chat.data.jspAPI.getContentPane().append(markup);
		
		// Comi añadimos nuevo contenido
		// reiniciamos jScrollPane plugin:
		
		chat.data.jspAPI.reinitialise();
		chat.data.jspAPI.scrollToBottom(true);
		
	},
	
	// TPedimos el ultimo chat
	// desde lastID
	
	getChats : function(callback){
		$.tzGET('getChats',{lastID: chat.data.lastID},function(r){
			
			for(var i=0;i<r.chats.length;i++){
				chat.addChatLine(r.chats[i]);
			}
			
			if(r.chats.length){
				chat.data.noActivity = 0;
				chat.data.lastID = r.chats[i-1].id;
			}
			else{
				// Si no hay chatas, incrementamos
				// noActivity contador.
				
				chat.data.noActivity++;
			}
			
			if(!chat.data.lastID){
				chat.data.jspAPI.getContentPane().html('<p class="noChats">No hay chats todavia</p>');
			}
			
			// Ajustamos el timeout para la siguiente request
			// Dependiendo de la actividad del chat
			
			var nextRequest = 1000;
			
			// 2 seg
			if(chat.data.noActivity > 3){
				nextRequest = 2000;
			}
			
			if(chat.data.noActivity > 10){
				nextRequest = 5000;
			}
			
			// 15 seg
			if(chat.data.noActivity > 20){
				nextRequest = 15000;
			}
		
			setTimeout(callback,nextRequest);
		});
	},
	
	// Solicitamos la lista de todos los usuarios
	
	getUsers : function(callback){
		$.tzGET('getUsers',function(r){
			
			var users = [];
			
			for(var i=0; i< r.users.length;i++){
				if(r.users[i]){
					users.push(chat.render('user',r.users[i]));
				}
			}
			
			var message = '';
			
			if(r.total<1){
				message = 'No one is online';
			}
			else {
				message = r.total+' '+(r.total == 1 ? 'persona':'people')+' online';
			}
			
			users.push('<p class="count">'+message+'</p>');
			
			$('#chatUsers').html(users.join(''));
			
			setTimeout(callback,15000);
		});
	},
	
	// Muestra error en pantalla arriba del todo.
	
	displayError : function(msg){
		var elem = $('<div>',{
			id		: 'chatErrorMessage',
			html	: msg
		});
		
		elem.click(function(){
			$(this).fadeOut(function(){
				$(this).remove();
			});
		});
		
		setTimeout(function(){
			elem.click();
		},5000);
		
		elem.hide().appendTo('body').slideDown();
	}
};

// Customizado GET & POST wrappers:

$.tzPOST = function(action,data,callback){
	$.post('php/ajax.php?action='+action,data,callback,'json');
}

$.tzGET = function(action,data,callback){
	$.get('php/ajax.php?action='+action,data,callback,'json');
}

// Customizado para placeholder text:

$.fn.defaultText = function(value){
	
	var element = this.eq(0);
	element.data('defaultText',value);
	
	element.focus(function(){
		if(element.val() == value){
			element.val('').removeClass('defaultText');
		}
	}).blur(function(){
		if(element.val() == '' || element.val() == value){
			element.addClass('defaultText').val(value);
		}
	});
	
	return element.blur();
}