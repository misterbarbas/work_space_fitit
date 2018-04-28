	<article id="contenido_influencer" style="margin-top: 110px;">
	<div id="informacion">

		<div  id="contenido_inf">
			<h1 style="width:100%; font-size: 120px;font-weight: 1000; font-family: 'Hind', sans-serif; color: #F5F5F5; text-align: center; margin-bottom: -150px; margin-top: -48px;"><?=$coatch[0]->nombre?></h1>

			<div class="izquierda">
				<div class="titulo_empieza">
					<h1 style="font-weight:1000; color: #333333; margin-bottom: 0px; font-size: 60px;"><?=$coatch[0]->nombre.' '.$coatch[0]->apellidos?></h1>
				</div>
				<div id="redes">
					<?php
						if($coatch[0]->facebook != NULL)
						{
							?>
								<a href="https://www.facebook.com/<?=$coatch[0]->facebook?>"><img src="/fitit_v2/images/ifacebook.png"></a>
							<?php
						}
						if($coatch[0]->instagram != NULL)
						{
							?>
								<a href="https://www.instagram.com/<?=$coatch[0]->instagram?>"><img src="/fitit_v2/images/iinstagram.png"></a>
							<?php
						}
						if($coatch[0]->youtube != NULL)
						{
							?>
								<a href="https://www.youtube.com/<?=$coatch[0]->youtube?>"><img src="/fitit_v2/images/iyoutube.png"></a>
							<?php
						}
						if($coatch[0]->spotify != NULL)
						{
							?>
								<a href="https://www.spotify.com/<?=$coatch[0]->spotify?>"><img src="/fitit_v2/images/ispotify.png"></a>
							<?php
						}
					?>

				</div>
				<br>
				<hr>
				<br><br>
				<div id="empieza" style="float:right;">
					<a href="/fitit_v2/empiezaconmigo"><div id="empieza_botton"><img src="/fitit_v2/images/boton_emp.png"></div></a>
				</div>

				<?php
					if($coatch[0]->formacion != "")
					{
						$formacion = explode(';', $coatch[0]->formacion);
						?>
							<div id="formacion" class="estilo_listas">
								<div class="estilo_listas_titulo">
									<span>
										Formación
										<img style="width: 30px; height: auto; margin-left: 10px;" src="http://localhost/fitit_v2/images/formacio.png">
									</span>
								</div>
								<div>
									<ul >
										<?php
											foreach($formacion as $key) {
												?>
													<li><?=$key?>
												<?php
											}
										?>
									</ul>

								</div>
							</div>
						<?php
					}
				?>
				<?php
					if($coatch[0]->logros != "")
					{
						$logros = explode(';', $coatch[0]->logros);
						?>
							<div id="logros" class="estilo_listas">
								<div class="estilo_listas_titulo">
									<span>
										Logros
										<img style="width: 30px; height: auto; margin-left: 10px;" src="http://localhost/fitit_v2/images/logros.png">
									</span>
								</div>
								<div>
									<ul>
										<?php
											foreach($logros as $key)
											{
												?>
													<li><?=$key?>
												<?php
											}
										?>
									</ul>
								</div>
							</div>
						<?php
					}
				?>
				<?php
					if($coatch[0]->productos != 0)
					{
						?>
							<div id="productos" class="lista">
								<div>Productos</div>
								<div>
									<ul>
										<?php
											foreach($logros as $key)
											{
												?>
													<li><?=$key?>
												<?php
											}
										?>
									</ul>
								</div>
								
							</div>
						<?php
					}
				?>
				<!--<div id="valoracion" class="lista">
					<div>Valoración</div>
					<div></div>
					<ul>
						<li>hola</li>
						<li>hola</li>
						<li>hola</li>
					</ul>
				</div>-->
			</div>

			<div id="foto_perfil_inpluencer">
				<img class="img-rounded img-responsive ordenador" style="border-radius: 5%" src="/fitit_v2/images/<?=$coatch[0]->imagen?>">
				<img class="img-rounded img-responsive movil" style="border-radius: 5%" src="/fitit_v2/images/<?php $foto = explode('.', $coatch[0]->imagen); echo $foto[0].'_m.png'?>">
			</div>
			
			
		</div>

		<div id="frase_in">
				<h1 style="width: 100%;"><?=$coatch[0]->frase?></h1>
			</div>
			<br><br>

	</div>
</article>
