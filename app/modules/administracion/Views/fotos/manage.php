<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform;?>"  data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->fotos_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->fotos_id; ?>" />
			<?php }?>
			<div class="row">
		<div class="col-12 form-group d-grid">
			<label   class="control-label">activo (Si, No)</label>
				<input type="checkbox" name="fotos_estado" value="1" class="form-control switch-form " <?php if ($this->getObjectVariable($this->content, 'fotos_estado') == 1) { echo "checked";} ?>   ></input>
				<div class="help-block with-errors"></div>
		</div>
				<div class="col-4 form-group">
					<label for="fotos_titulo"  class="control-label">titulo</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  fondo-azul " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->fotos_titulo; ?>" name="fotos_titulo" id="fotos_titulo" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-4 form-group">
					<label for="fotos_foto" >foto</label>
					<input type="file" name="fotos_foto" id="fotos_foto" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png"  >
					<div class="help-block with-errors"></div>
					<?php if($this->content->fotos_foto) { ?>
						<div id="imagen_fotos_foto">
							<img src="/images/<?= $this->content->fotos_foto; ?>"  class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('fotos_foto','<?php echo $this->route."/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove" ></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
				<div class="col-4 form-group">
					<label for="fotos_fecha"  class="control-label">fecha</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  fondo-verde-claro " ><i class="fas fa-calendar-alt"></i></span>
						</div>
					<input type="text" value="<?php if($this->content->fotos_fecha){ echo $this->content->fotos_fecha; } else { echo date('Y-m-d'); } ?>" name="fotos_fecha" id="fotos_fecha" class="form-control"   data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-language="es"  >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<input type="hidden" name="fotos_album"  value="<?php if($this->content->fotos_album){ echo $this->content->fotos_album; } else { echo $this->album; } ?>">
				<div class="col-12 form-group">
					<label for="fotos_descripcion" class="form-label" >descripción</label>
					<textarea name="fotos_descripcion" id="fotos_descripcion"   class="form-control tinyeditor" rows="10"   ><?= $this->content->fotos_descripcion; ?></textarea>
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?>?album=<?php if($this->content->fotos_album){ echo $this->content->fotos_album; } else { echo $this->album; } ?>" class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>