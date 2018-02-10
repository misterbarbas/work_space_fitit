<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/style.css">
</head>

<style type="text/css">

			#coach {
        font-size: 18px;
			}
			#title {
				margin-bottom: 50px;
				color: #232323;
			}
			.red {
          color: #FF4548;
      }
      .grey {
          color: #444444;
      }
      .fitit_style {
          font-weight: bold;
          font-style: italic;
      }
			.margin_top {
				margin-top: 150px;
			}
			.bold {
				font-weight: bold;
			}
			.black {
				color: #232323;
			}
			.big {
				font-size: 35px;
			}
			.back {
				background-color: #FF4548;
				color: white;
				border-radius: 10px;
			}
			ul {
				list-style-type: none;
				list-style-position:inside;
			}
			ul img {
				width: 45px;
				height: auto;
				margin-right: 20px;
			}
			ul .margin_top {
				margin-top: 20px;
			}
      #fitit_font {
          font-family: sans-serif;
      }
      #button {
          background-color: #FF4548;
          color: white;
      }
      #button:hover {
           background-color: #CB2E2E;
      }
      #accept {
          font-size: 13px;
      }
</style>

<div id="coach">

				<div class="text-center margin_top" style="margin-right: 30px; margin-left: 30px;">
					<h2>¿Eres coach fitness y necesitas optimizar y ampliar tu red de clientes?</h2>
					<br>
					<h1 class="bold black">¡EN FITIT TE DAMOS LA SOLUCIÓN!</h1>
					<br>
				</div>


				<div class="text-center container" >
					<!--<h3 class="bold black">¡TE PROPORCIONAMOS LAS HERRAMIENTAS NECESARIAS PARA OPTIMIZAR LA GESTIÓN DE TUS CLIENTES!</h3>
					<br>
					<h3 class="bold grey">¡ADEMÁS TE AYUDAMOS A <span class="red">POTENCIAR</span> TU <span class="big black">MARCA PERSONAL</span> Y TUS<span class="big black"> REDES SOCIALES</span>!</h3>
					<br>-->
					<a href="#title"><h1 class="bold red back">¡SÚMATE A LA REVOLUCIÓN DE LOS ASESORAMIENTOS FITNESS ONLINE!</h1></a>
					<br><br>
				</div>

				<img style="width: 100%; height: 300px; opacity: 0.75"src="http://localhost/fitit_v2/images/ecf-editada.png">

				<div class="jumbotron">
					<h3 class="text-center">¿Qué podrás conseguir teniendo un perfil de coach?</h3>
					<br>
					<ul>
						<li><img src="http://localhost/fitit_v2/images/biceps.png"><span class="red bold text-uppercase">Aumentar</span> la captación de clientes</li>
						<li class="margin_top"><img src="http://localhost/fitit_v2/images/biceps.png"><span class="red bold text-uppercase">Dirigir</span> el cliente potencial a una única web (cualquier persona que necesite asesoramiento nutricional y deportivo entrará en www.fitit.es)</li>
						<li class="margin_top"><img src="http://localhost/fitit_v2/images/biceps.png"><span class="red bold text-uppercase">Agilizar</span> la comunicación cliente-coach</li>
						<li class="margin_top"><img src="http://localhost/fitit_v2/images/biceps.png"><span class="red bold text-uppercase">Optimizar</span> la gestión de clientes</li>
					</ul>
				</div>

				<div class="jumbotron text-center black">
					<h3 class="bold">¿Ya estás convencido de hacerte un perfil de coach?</h3>
					<h4>Rellena el siguiente formulario y nos pondremos en contacto contigo para informarte de las condiciones de uso</h4>
				</div>

				<br>
        <h1 id="title" class="text-center">Datos para crear tu perfil de coach en <span id="fitit_font" class="fitit_style"><span class="red">FITIT.</span><span class="grey">ES</span></span></h1>

        <form id="form" method="POST" action="http://formspree.io/esfitit@gmail.com" class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputApellido">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos" name="Apellidos" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder='p.e: "ejemplo@ejemplo.com"' name="Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputDNI">DNI</label>
                    <input type="text" class="form-control" id="inputDNI" placeholder="DNI" name="DNI" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFecha">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="inputFecha" placeholder="Fecha de nacimiento" name="Fecha de nacimiento" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTelf">Teléfono</label>
                    <input type="text" class="form-control" id="inputTelf" placeholder="Teléfono" name="Teléfono" required>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Provincia</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Provincia" name="Provincia" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Población</label>
                    <input type="text" class="form-control" id="inputState" placeholder="Población" name="Población" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Código Postal</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Código Postal" name="CP" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label>Redes sociales</label>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="Facebook" name="Facebook">
                    </div>
                    <div class="form-group col-md-3">
                        <!--<div class="input-group">
                          <span class="input-group-addon" id="insta">@</span>-->
                          <input type="text" class="form-control" placeholder="Instagram" name="Instagram" aria-describedby="insta">
                        <!--</div>-->
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="Youtube" name="Youtube">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="Spotify" name="Spotify">
                    </div>
                </div>
            </div>
            <div class="jumbotron">

                <div class="form-group">
                    <label for="Frase">Frase motivadora</label>
                    <textarea class="form-control" rows="2" id="Frase" placeholder='p.e: "Tu objetivo es mi objetivo"' name="Frase"></textarea>
                </div>

                <div class="form-group">
                    <label for="Formación">Formación <span style="font-size: 13px;">(*Obligatorio disponer de título formativo)</span></label>
                    <textarea class="form-control" rows="4" id="Formación" placeholder="Especificar titulaciones" name="Formación"></textarea>
                </div>

                <div class="form-group">
                    <label for="Logros">Logros</label>
                    <textarea class="form-control" rows="4" id="Logros" placeholder='p.e: "1er Puesto Campeonato IFBB Interterritorial en categoría Men’s Physique (2017)"' name="Logros"></textarea>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-legend col-sm-5">¿Tienes productos propios? (camisetas, gorras…)</legend>
                        <div class="col-sm-7">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="Productos propios" id="gridRadios1" value="Sí">
                                    Sí
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="Productos propios" id="gridRadios2" value="No" checked>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <textarea id="accept" class="form-control" rows="2" name="Consentimiento" readonly>De acuerdo con la actual normativa regulada por la LOPD 15/99 y LSSICE 34/2002, agradeceremos que pulse 'Acepto' con el fin de obtener consentimiento, expresado e inequívoco para poder enviarnos este correo con sus datos personales. Con todo ello, resumiendo acepta: AUTORIZAR A FITIT, Plataforma de asesoramiento fitness online, utilizar estos datos para crearle un perfil de coach en fitit.es.</textarea>
            <div class="checkbox">
                <label><input type="checkbox" name="Acepto" value="Sí, acepto" required> Acepto</label>
            </div>
            <br>
            <button id="button" type="submit" class="btn">Enviar</button>
						<br><br><br><br><br>

        </form>
	</div>
