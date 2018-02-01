<article id="contenido_influencer" style="margin-top: 110px;">
	<div id="informacion">

		<h1 class="text-center" style="width:100%; font-size: 120px;font-weight: 1000; font-family: 'Hind', sans-serif; color: #F5F5F5"><?=$coatch[0]->nombre?></h1>

		<div class="izquierda">
			<div class="titulo_empieza">
				<h1 style="font-weight:1000; color: #333333; margin-bottom: 0px; font-size: 60px;"><?=$coatch[0]->nombre/*.' '.$coatch[0]->apellidos*/?></h1>
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
			<hr>

			<h1 style="width: 100%;"><?=$coatch[0]->frase?></h1>

			<div id="empieza" style="float:right;">
				<a href="/fitit_v2/empiezaconmigo"><button type="submit" id ="button-empieza">¡EMPIEZA CONMIGO!</button></a>
			</div>

			<?php
				if($coatch[0]->formacion != "")
				{
					$formacion = explode(';', $coatch[0]->formacion);
					?>
						<div id="formacion" class="lista">
							<div>
								Formación
								<img style="width: 30px; height: auto; margin-left: 10px;" src="http://localhost/fitit_v2/images/formacio.png">
							</div>
							<ul>
								<?php
									foreach($formacion as $key) {
										?>
											<li><?=$key?>
										<?php
									}
								?>
							</ul>
						</div>
					<?php
				}
			?>
			<?php
				if($coatch[0]->logros != "")
				{
					$logros = explode(';', $coatch[0]->logros);
					?>
						<div id="logros" class="lista">
							<div>
								Logros
								<img style="width: 30px; height: auto; margin-left: 10px;" src="http://localhost/fitit_v2/images/logros.png">
							</div>
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
					<?php
				}
			?>
			<?php
				if($coatch[0]->productos != 0)
				{
					?>
						<div id="productos" class="lista">
							<div>Productos</div>
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
			<img class="img-rounded img-responsive" style="border-radius: 5%" src="/fitit_v2/images/<?=$coatch[0]->imagen?>">
		</div>

	</div>

</article>
