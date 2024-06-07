<div style="width: 100%; background: #6e6e6e20; padding: 50px; font-size: 15px;">
  <table style="max-width: 600px; background: #FFF; border: 2px solid #192a4b; margin: auto; padding: 20px;">
    <tr>
      <td style="border-bottom: 2px solid #192a4b;">
        <img src="https://feincol.com/wp-content/uploads/2019/10/logo-feincol-01.png" alt="" height="50"  style="display:block; margin:auto; margin-bottom:10px">
      </td> 
    </tr>
    <tr>
      <td style="padding: 10px 20px; padding-bottom: 20px;">
        <span style="color: #202020;">
          <b">
            <?php echo $this->data['nombre'] ?>
          </b>
          ha enviado una consulta con los siguientes datos:
        </span>
      </td>
    </tr>
    <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Correo electrónico:
          </b>
          <?php echo $this->data['correo'] ?>
        </span>
      </td>
    </tr>
    <!-- <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Teléfono:
          </b>
          <?php echo $this->data['phone'] ?>
      </td>
    </tr> -->
    <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Asunto
          </b>
          <?php echo $this->data['asunto'] ?>
      </td>
    </tr>
    <tr>
      <td style="padding: 3px 20px; padding-bottom: 30px;">
        <span style="color: #6e6e6e;">
          <b>
            Mensaje:
          </b>
          <?php echo $this->data['mensaje'] ?>
      </td>
    </tr>
  </table>
</div>