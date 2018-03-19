<!--<script>
    $(function(){
       $("#f_login").submit(function(e)
	    {
	      e.preventDefault();
	      email = $("#email").val();
	      pass = $.md5($("#password").val());
	      $.post( "/fitit_v2/login/login_user",{email:email, pass:pass}, function( data ) {

	       	if(data == 1)
	       	{
	       		window.location.href = "/fitit_v2/user";
	       	}
	       	else
	       	{
	       		console.log("Error");
	       	}


	      });
	    });
    });
</script> Se ha de borrar,x ahora lo mantenemos para hacer pruebas-->

<script>
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<article id="contenido_l" style="margin-top: 180px;">
	<form id="f_login">
		<h2 style="text-align: center">Login</h2>
		<input type="email" id="email" name="email" placeholder="Correo electronico">
		<input type="password" id="password" name="contraseña" placeholder="Contraseña">
		<input type="checkbox" onclick="showPassword()"><span>Mostrar Contraseña</span>
		<input type="submit" class="boton click" name="registro" value="Login">
	</form>
</article>
