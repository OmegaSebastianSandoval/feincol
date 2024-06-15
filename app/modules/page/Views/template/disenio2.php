<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="caja-contenido-simple design-two" style="background-color: <?php if ($contenido->contenido_fondo_color) {
																			echo  $contenido->contenido_fondo_color;
																		} else if ($colorfondo) {
																			echo $colorfondo;
																		}   ?>">
	<?php if ($contenido->contenido_titulo_ver == 1) { ?>
		<h2 class="titulo-1 d-none"><?php echo $contenido->contenido_titulo; ?></h2>
	<?php } ?>

	<div class="row">
		<?php 
		// Condición para determinar la clase de la imagen
		$image_col_class = ($contenido->contenido_titulo_ver != 1 && !$contenido->contenido_enlace && !$contenido->contenido_descripcion) ? 'col-12' : 'col-sm-6';
		if ($contenido->contenido_imagen) { ?>
			<div class="<?php echo $image_col_class; ?>">
				<div class="imagen-contenido"><img loading="lazy" src="/images/<?php echo $contenido->contenido_imagen; ?>"></div>
			</div>
		<?php } ?>
		<div <?php if ($contenido->contenido_imagen) { ?>class="col-sm-6" <?php } else { ?>class="col-sm-12" <?php } ?>>
			<?php if ($contenido->contenido_titulo_ver == 1) { ?>
				<h2><?php echo $contenido->contenido_titulo; ?></h2>
			<?php } ?>
			<div class="descripcion">
				<?php echo $contenido->contenido_descripcion; ?>
			</div>
			<?php if ($contenido->contenido_archivo) { ?>
				<div align="center" class="archivo">
					<a href="/files/<?php echo $contenido->contenido_archivo ?>" target="blank">Descargar Archivo <i class="fas fa-download"></i></a>
				</div>
			<?php } ?>
			<?php if ($contenido->contenido_enlace) { ?>
				<div>
					<a href="" class="btn btn-block btn-vermas" <?php if ($contenido->contenido_enlace_abrir == 1) { ?> target="blank" <?php } ?>> <?php if ($contenido->contenido_vermas) { ?><?php echo $contenido->contenido_vermas; ?><?php } else { ?>Ver Más<?php } ?></a>
				</div>
			<?php } ?>
		</div>

	</div>
</div>
