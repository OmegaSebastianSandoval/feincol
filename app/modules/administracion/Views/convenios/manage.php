<h1 class="titulo-principal"><i class="fas fa-cogs"></i>
	<?php echo $this->titlesection; ?>
</h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform; ?>"
		data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->convenio_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->convenio_id; ?>" />
			<?php } ?>
			<div class="row">
				<input type="hidden" name="convenio_categoria"
					value="<?php if ($this->content->convenio_categoria) {
						echo $this->content->convenio_categoria;
					} else {
						echo $this->categoria;
					} ?>">
				<div class="col-1 d-grid form-group">
					<label class="control-label">Activo (SI,NO)</label>
					<input type="checkbox" name="convenio_estado" value="1" class="form-control switch-form " <?php if ($this->getObjectVariable($this->content, 'convenio_estado') == 1) {
						echo "checked";
					} ?>></input>
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="row">

				<div class="col-6 form-group">
					<label for="convenio_nombre" class="control-label">Nombre</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  fondo-rosado "><i
									class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->convenio_nombre; ?>" name="convenio_nombre"
							id="convenio_nombre" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-5 form-group">
					<label for="convenio_imagen">Imagen</label>
					<input type="file" name="convenio_imagen" id="convenio_imagen" class="form-control  file-image"
						data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->convenio_imagen) { ?>
						<div id="imagen_convenio_imagen">
							<img src="/images/<?= $this->content->convenio_imagen; ?>"
								class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button"
									onclick="eliminarImagen('convenio_imagen','<?php echo $this->route . "/deleteimage"; ?>')"><i
										class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
				<div class="col-12 form-group">
					<label for="convenio_descripcion" class="form-label">Descripci&oacute;n</label>
					<textarea name="convenio_descripcion" id="convenio_descripcion" class="form-control tinyeditor"
						rows="10"><?= $this->content->convenio_descripcion; ?></textarea>
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?>?categoria=<?php if ($this->content->convenio_categoria) {
				   echo $this->content->convenio_categoria;
			   } else {
				   echo $this->categoria;
			   } ?>"
				class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>