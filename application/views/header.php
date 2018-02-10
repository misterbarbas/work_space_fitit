<html>
    <head>
		<title>FITIT.ES</title>
    <link rel='shortcut icon' type='image/jpg' href='/fitit_v2/images/f-rojo.jpg' />
    <link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/hover-min.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="http://localhost/fitit_v2/js/jquery.md5.js"></script>
    <script src="http://localhost/fitit_v2/js/login.js"></script><!--modificado-->
    <link href="https://fonts.googleapis.com/css?family=Asap|Hind|Roboto|Roboto+Slab" rel="stylesheet">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<script type="text/javascript">
		$(function(){
			$("#menu-movil").hide();
			$(".menu-fondo").hide();
			//$(".formulario").hide();
			$("#hamburgesa").on("click", function(){
				$("#hamburgesa img").attr("src", "http://localhost/fitit_v2/images/cross.png");
				$("#menu-movil").animate({width: 'toggle'});
				$(".menu-fondo").show();

			});
			$(".menu-fondo").on("click", function(){
				$("#menu-movil").animate({width: 'toggle'});
				$("#hamburgesa img").attr("src", "http://localhost/fitit_v2/images/menu.png");
				$(".menu-fondo").hide();

			});
			$(".botones").on("click", function(){
				$(".formulario").slideDown("slow");
			});
		});

		$(document).ready(function() {
			anchor.init()
		});

		anchor =
		{
			init : function()
			{
				$("a.anchorLink").click(function ()
				{
					elementClick = $(this).attr("href");
					destination = $(elementClick).offset().top;
					$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 1100 );
					return false;
				})
			}
		}

		</script>
    </head>
    <body>
    	<nav class="fix">
    		<div id="menu">
    			<div id="hamburgesa"><img src="http://localhost/fitit_v2/images/menu.png"></div>
    			<span class="nav_comp_logo"><a href="/fitit_v2"><img style="width: auto; height: 200px;" src="http://localhost/fitit_v2//images/logonegro.png"></a></span>

				<?php
					if(empty($this->session->userdata('rol')))
					{
				?>
	    			<!--<span class="nav_comp fit"><a href="/fitit_v2/#contenido" class="anchorLink"><span id="texto_login" class="hvr-underline-from-left">EMPIEZA TU VIDA FIT</span></a></span>
	    			-->
        			<span class="nav_comp"><a href="/fitit_v2/queesfitit"><span class="texto_login ms" style="font-weight: bold;">¿QUÉ ES FITIT?</span></a></span>
              <span class="nav_comp"><a href="/fitit_v2/#coatchs"><span class="texto_login ms" style="font-weight: bold;">ELIGE A TU COACH</span></a></span>
              <span class="nav_comp"><a href="/fitit_v2/erescoach"><span class="texto_login ms" style="font-weight: bold;">¿ERES COACH FITNESS?</span></a></span>

              <!--<span class="nav_comp"><span class="texto_login ms"></span></span>-->

              <span class="nav_comp">
  							<a href="/fitit_v2/login" class="hvr-underline-from-left">
  								<img src="http://localhost/fitit_v2/images/user.png">
  								<span style="font-size: 15px;" class="texto_login">Iniciar sesión</span>
  							</a>
              </span>
				<?php
					}
					else if($this->session->userdata('rol') == 3)
					{
				?>
						<!--<span class="nav_comp"><span class="texto_login ms"></span></span>-->

						<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/calendario.png"><br>
                <span class="texto_login ms">Calendario</span>
              </a>
            </span>

    				<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/progreso.png"><br>
                <span class="texto_login ms">Progresión</span>
              </a>
            </span>

    				<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/dietas.png"><br>
                <span class="texto_login ms">Dieta</span>
              </a>
            </span>

            <span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/entreno.png"><br>
                <span class="texto_login ms">Entrenamiento</span>
              </a>
            </span>

            <span class="nav_comp fit_user">
              <a href="chat/login_chat">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/cometnarios.png"><br>
                <span class="texto_login ms">Chat</span>
              </a>
            </span>

    				<span class="nav_comp fit_user">
              <a href="/fitit_v2/user">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/tienda.png"><br>
                <span class="texto_login ms">Tienda</span>
              </a>
            </span>

            <!--<span class="nav_comp"><span class="texto_login ms"></span></span>-->

						<span class="nav_comp">
    						<a href="/fitit_v2/login/logout" class="">
    							<img src="http://localhost/fitit_v2/images/user.png">
    							<span style="font-size: 15px;" class="texto_login"><?php echo $this->session->userdata('email')?></span><!--Bienvenida al cliente-->
                  <span class="btn_logout btn_logout2" style="font-size: 15px;">Logout</span>
    						</a>
            </span>
				<?php
					}
					else if($this->session->userdata('rol') == 2)
					{
				?>
						<!--<span class="nav_comp"><span class="texto_login ms"></span></span>-->

						<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/calendario.png"><br>
                <span class="texto_login ms">Calendario</span>
              </a>
            </span>

    				<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/listado-clientes.png"><br>
                <span class="texto_login ms">Listado de clientes</span>
              </a>
            </span>

    				<span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/cometnarios.png"><br>
                <span class="texto_login ms">Chat</span>
              </a>
            </span>

            <span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/tienda.png"><br>
                <span class="texto_login ms">Tienda</span>
              </a>
            </span>

            <span class="nav_comp fit_user">
              <a href="/fitit_v2/login">
                <img style="width:25px;" src="http://localhost/fitit_v2/images/user.png"><br>
                <span class="texto_login ms">Perfil</span>
              </a>
            </span>

						<span class="nav_comp">
    						<a href="/fitit_v2/login/logout" class="">
    							<img src="http://localhost/fitit_v2/images/user.png">
    							<span style="font-size: 15px;" class="texto_login"><?php echo $this->session->userdata('email')?></span><!--Bienvenida al cliente-->
                  <span class="btn_logout btn_logout2" style="font-size: 15px;">Logout</span>
    						</a>
            </span>
				<?php
					}
				?>

    		</div>
			<div id="menu-movil">
        <ul>
          <li><a href="/fitit_v2/login">
            <!--<img style="width:25px;" src="http://localhost/fitit_v2/images/calendario.png">-->
            <span>¿QUÉ ES FITIT?</spam>
          </a></li>
          <li><a href="/fitit_v2/login">
            <!--<img style="width:25px;" src="http://localhost/fitit_v2/images/progreso.png">-->
            <span>¿ERES COACH FITNESS?</spam>
          </a></li>

        </ul>
			</div>
			<div class="menu-fondo">

      </div>
    	</nav>
    	<?php
			if($this->session->userdata('rol') == 3)
			{
		?>
	    	<div id="menu_inferior">
				<span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/progreso.png"></a></span>
				<span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/dietas.png"></a></span>
        <span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/entreno.png"></a></span>
				<span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/cometnarios.png"></a></span>
				<span class="nav_comp"><a href="/fitit_v2/user"><img src="http://localhost/fitit_v2/images/tienda.png"></a></span>
	    	</div>
		<?php
			}
		?>
    <?php
    if($this->session->userdata('rol') == 2)
    {
  ?>
      <div id="menu_inferior">
      <span class="nav_comp"><a href="/fitit_v2/user"><img src="http://localhost/fitit_v2/images/tienda.png"></a></span>
      <span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/listado-clientes.png"></a></span>
      <span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/calendario.png"></a></span>
      <span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/cometnarios.png"></a></span>
      <span class="nav_comp"><a href="/fitit_v2/login"><img src="http://localhost/fitit_v2/images/perfil.png"></a></span>
      </div>
  <?php
    }
  ?>
