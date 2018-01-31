<section class="fit_user" id="video" style="margin-top: 110px;">
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" ><!--muted/>-->
			<source src="/fitit_v2/videos/avion.mp4" type="video/mp4" />
	</video/>
</section>
<?php //var_dump($coatchs[0])?>
<article id="contenido">
	<?php
		if($nuevos[0]->total != 0)
		{
			?>
				<div id="nuevos" class="myjumbotron">
					<h2 style="color:#696969; text-align: center">NUEVOS COACHES</h2>
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
</article>
