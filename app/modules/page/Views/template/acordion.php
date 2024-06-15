<?php if ($columna->contenido_seccion == 17) { ?>

	<div class="d-none d-md-block">

		<nav data-aos="fade-up" data-aos-anchor-placement="top-bottom" class=" nav mt-3 nav<?php echo $columna->contenido_id; ?>">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<?php foreach ($acordioncontent as $key3 => $acordion) : ?>
					<?php $acordion = $acordion["nietos"]; ?>

					<button class="nav-link <?php echo $key3 == 0 ? "active" : '' ?> " id="nav<?php echo $acordion->contenido_id; ?>" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $acordion->contenido_id; ?>" type="button" role="tab" aria-controls="nav<?php echo $acordion->contenido_id; ?>" aria-selected="true"><?php echo $acordion->contenido_titulo; ?></button>

				<?php endforeach ?>
			</div>
		</nav>
		<div class="tab-content mb-3 tab-content-<?php echo $columna->contenido_id; ?>" id="nav-tabContent ">
			<?php foreach ($acordioncontent as $key3 => $acordion) : ?>
				<?php $acordion = $acordion["nietos"]; ?>

				<div class="tab-pane fade show  <?php echo $key3 == 0 ? "active" : '' ?>" id="nav-<?php echo $acordion->contenido_id; ?>" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
					<?php echo $acordion->contenido_descripcion; ?>

				</div>
			<?php endforeach ?>

		</div>
	</div>



	<div class="d-block d-md-none">

		<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="accordion my-3 " id="accordion<?php echo $columna->contenido_id; ?>">

			<?php foreach ($acordioncontent as $key3 => $acordion) : ?>

				<?php $acordion = $acordion["nietos"]; ?>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $acordion->contenido_id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $acordion->contenido_id; ?>">
							<?php echo $acordion->contenido_titulo; ?>

						</button>
					</h2>
					<div id="collapse<?php echo $acordion->contenido_id; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<?php if ($acordion->contenido_imagen) { ?>
								<div class="imagen-contenido">
									<div><img src="/images/<?php echo $acordion->contenido_imagen; ?>"></div>
								</div>
							<?php } ?>
							<div>
								<div class="descripcion">
									<?php echo $acordion->contenido_descripcion; ?>
								</div>
								<?php if ($acordion->contenido_enlace) { ?>
									<div>
										<a href="<?php $acordion->contenido_enlace; ?>" <?php if ($acordion->contenido_enlace_abrir == 1) { ?> target="_blank" <?php } ?> class="btn btn-block btn-vermas"> <?php if ($acordion->contenido_vermas) { ?><?php echo $acordion->contenido_vermas; ?><?php } else { ?>Ver Más<?php } ?></a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<div class="card w-100 d-none">
					<div class="card-header" id="heading<?php echo $acordion->contenido_id; ?>" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $acordion->contenido_id; ?>" <?php if ($key3 == 0) { ?> aria-expanded="true" <?php } ?> aria-controls="collapse<?php echo $acordion->contenido_id; ?>">
						<?php if ($acordion->contenido_imagen) { ?>
							<img src="/images/<?php echo $acordion->contenido_imagen; ?>" style="max-width: 50px" class="mr-2">
						<?php } ?>
						<?php echo $acordion->contenido_titulo; ?>
					</div>
					<div id="collapse<?php echo $acordion->contenido_id; ?>" class="collapse " aria-labelledby="heading<?php echo $acordion->contenido_id; ?>" data-parent="#accordion<?php echo $columna->contenido_id; ?>">
						<div class="card-body">
							<!-- <?php if ($acordion->contenido_imagen) { ?>
						<div class="imagen-contenido">
							<div><img src="/images/<?php echo $acordion->contenido_imagen; ?>"></div>
						</div>
					<?php } ?> -->
							<div>
								<div class="descripcion">
									<?php echo $acordion->contenido_descripcion; ?>
								</div>
								<?php if ($acordion->contenido_enlace) { ?>
									<div>
										<a href="<?php $acordion->contenido_enlace; ?>" <?php if ($acordion->contenido_enlace_abrir == 1) { ?> target="_blank" <?php } ?> class="btn btn-block btn-vermas"> <?php if ($acordion->contenido_vermas) { ?><?php echo $acordion->contenido_vermas; ?><?php } else { ?>Ver Más<?php } ?></a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>


			<?php endforeach ?>
		</div>
	</div>

<?php } else { ?>

	<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="accordion " id="accordion<?php echo $columna->contenido_id; ?>">

		<?php foreach ($acordioncontent as $key3 => $acordion) : ?>

			<?php $acordion = $acordion["nietos"]; ?>

			<div class="card w-100">
				<div class="card-header" id="heading<?php echo $acordion->contenido_id; ?>" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $acordion->contenido_id; ?>" <?php if ($key3 == 0) { ?> aria-expanded="true" <?php } ?> aria-controls="collapse<?php echo $acordion->contenido_id; ?>">
					<?php if ($acordion->contenido_imagen) { ?>
						<img src="/images/<?php echo $acordion->contenido_imagen; ?>" style="max-width: 50px" class="mr-2">
					<?php } ?>
					<?php echo $acordion->contenido_titulo; ?>
				</div>
				<div id="collapse<?php echo $acordion->contenido_id; ?>" class="collapse " aria-labelledby="heading<?php echo $acordion->contenido_id; ?>" data-parent="#accordion<?php echo $columna->contenido_id; ?>">
					<div class="card-body">
						<!-- <?php if ($acordion->contenido_imagen) { ?>
						<div class="imagen-contenido">
							<div><img src="/images/<?php echo $acordion->contenido_imagen; ?>"></div>
						</div>
					<?php } ?> -->
						<div>
							<div class="descripcion">
								<?php echo $acordion->contenido_descripcion; ?>
							</div>
							<?php if ($acordion->contenido_enlace) { ?>
								<div>
									<a href="<?php $acordion->contenido_enlace; ?>" <?php if ($acordion->contenido_enlace_abrir == 1) { ?> target="_blank" <?php } ?> class="btn btn-block btn-vermas"> <?php if ($acordion->contenido_vermas) { ?><?php echo $acordion->contenido_vermas; ?><?php } else { ?>Ver Más<?php } ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
<?php } ?>