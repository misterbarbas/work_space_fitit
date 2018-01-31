    $(function(){
       $("#f_login").submit(function(e)
	    {
	      e.preventDefault();
	      email = $("#email").val();
	      pass = ($("#password").val());
	      registro = $("#registro").val();
	      $.post( "login/login_user",{email:email, pass:pass, registro:registro}, function( data ) {

	       	if(email && pass)
	       	{
	       		//alert("Fantastico! tenemos"+ email+pass);
	       		window.location.href = "inicio";
	       	}
	       	else
	       	{
	       		alert("Debes rellenar todos los campos");
	       	}


	      });
	    });
    });