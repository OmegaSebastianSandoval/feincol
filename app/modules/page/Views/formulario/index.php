<?php
echo $this->banner;
?>

<?php
echo $this->contenido;
?>

<div class="container pb-5"  data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  <div class="row d-flex flex-column align-items-center">
    <div class="col-12 col-lg-9">
      <form action="/page/formulario/envarmensaje" class="formulario-contacto" id="formulario-contacto">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <!-- <div class="col-12">

                <select name="tipo" id="tipo" class="input-field" required>
                  <option value="" selected disabled>--Seleccione--</option>

                  <option value="Felicitarnos">Felicitarnos</option>
                  <option value="Sugerencia">Sugerencia</option>
                  <option value="Queja">Queja</option>
                  <option value="Reclamo">Reclamo</option>
                  <option value="Sugerencia">Sugerencia</option>

                </select>
              </div> -->
              <div class="col-12 col-md-6">

                <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Nombre*" required>

              </div>
              <div class="col-12 col-md-6">

                <input type="email" id="correo" name="correo" class="input-field" placeholder="Email*" required>


              </div>
              <div class="col-12 col-md-6">

                <!-- <input type="text" id="telefono" name="telefono" class="input-field" placeholder="Telefono*" required> -->
              
              
                <input type="hidden" id="email" name="email">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <input name="hash" type="hidden" value="<?php echo md5(date("Y-m-d")); ?>" />
                <input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
                <input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">

              </div>
              <div class="col-12 col-md-12">
                <input type="text" id="asunto" name="asunto" class="input-field" placeholder="Asunto*" required>
              </div>
              <div class="col-12">

                <textarea name="mensaje" id="mensaje" class="input-field" placeholder="Mensaje" required></textarea>
              </div>

            </div>
          </div>

        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" required value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#modalPoliticas" role="button">
            Aceptar términos y condiciones
          </label>
        </div>

        <div class="d-grid d-md-flex justify-content-center justify-content-md-between">
          <div class="g-recaptcha" data-sitekey="6LfFDZskAAAAAE2HmM7Z16hOOToYIWZC_31E61Sr"></div>

        </div>
        <div class="d-flex justify-content-center">
          <button class="btn-azul " id="submit-btn">Enviar</button>
        </div>


      </form>

    </div>
  </div>
</div>
<style>
  .main-general {
    background-color: #f7f7f7;
  }

  .form-check-label {
    color: var(--azul-oscuro);
    font-weight: 600;
  }

  .btn-azul {}
</style>