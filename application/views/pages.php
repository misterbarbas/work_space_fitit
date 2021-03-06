<style type="text/css">

.container {
  position: relative;
}

.container_video {
  position: relative;
}

.container_video a {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.bottom-position {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.2;
}

.container:hover .middle {
  opacity: 1;
}
.container:hover .bottom-position {
  opacity: 1;
}

.text {
  color: #424242;
  font-weight: bold;
  font-size: 16px;
  font-style: italic;
  text-transform: uppercase;
}

.text2 {
  color: #424242;
  font-size: 14px;
  font-style: italic;
}

</style>

<section class="fit_user container_video" id="video" style="margin-top: 110px;">
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" ><!--muted/>-->
			<source src="/fitit_v2/videos/avion.mp4" type="video/mp4" />
	</video/>
	<a href="/fitit_v2/#contenido"><img style="width: 300px;" src="http://localhost/fitit_v2/images/boton_hover.png"
		onmouseover="this.src='http://localhost/fitit_v2/images/boton.png'"
		onmouseout="this.src='http://localhost/fitit_v2/images/boton_hover.png'"></a>
</section>
<?php //var_dump($coatchs[0])?>
<article id="contenido">
	<?php
		if($nuevos[0]->total != 0)
		{
			?>
				<div id="nuevos" class="myjumbotron">
					<h2 style="color:#696969; text-align: center; font-size: 40px;">NUEVOS COACHES</h2>
					<section id="influencers">
					<?php
					}

					$date = date( "Y-m-d" );
					$ayer = date( "Y-m-d", strtotime( "-7 day", strtotime( $date ) ) );
					foreach ($coatchs as $coatch)
					{

						if($coatch->fecha_union >= $ayer)
						{
						?>
									<a href="/fitit_v2/inicio/influencer/<?=$coatch->id_coatch?>">
									<div class="influencer">
										<div class="nombre"><?=$coatch->nombre?> <?=$coatch->apellidos?></div>
										<div class="titulo"><?=$coatch->frase?></div>
										<img src="/fitit_v2/images/<?=$coatch->imagen?>">
										</div>
									</a>
						<?php
						}

					}
				?>
				</section>
		</div>


	<div id="coatchs" style="margin-bottom: 50px;">
		<h2 style="text-align: center">ELIGE A TU COACH</h2>
		<section id="influencers">

		<?php

		foreach ($coatchs as $coatch)
		{
			if($coatch->fecha_union <= $ayer)
			{
				?>
					<a href="/fitit_v2/inicio/influencer/<?=$coatch->id_coatch?>">
						<div class="influencer">
							<div class="nombre"><?=$coatch->nombre?> <?=$coatch->apellidos?></div>

              <div class="container">
                <img src="/fitit_v2/images/<?=$coatch->imagen?>" class="image">
                <div class="middle">
                  <div class="text"><?=$coatch->frase?></div>
                </div>
                <div class="bottom-position">
                  <div class="text2">Ver perfil</div>
                </div>
              </div>

						</div>
					</a>
				<?php
			}
		}

		?>

		</section>
	</div>
</article>
