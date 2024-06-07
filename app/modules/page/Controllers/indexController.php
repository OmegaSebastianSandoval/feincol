<?php

/**
 *
 */

class Page_indexController extends Page_mainController
{

  protected $_csrf_section = "omega_index";


  public function init()
  {


    // Inicia la sesión si no está ya iniciada
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    // Genera un token CSRF
    if (empty($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    parent::init();
  }


  public function indexAction()
  {
    $this->_csrf_section = "omega_index" . date("YmdHis");
    $this->_csrf->generateCode($this->_csrf_section);
    $this->_view->csrf_section = $this->_csrf_section;
    $this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];


    $this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];

    $this->_view->banner = $this->template->bannerPrincipal(1);

    $this->_view->contenido = $this->template->getContentseccion(1);
  }


  public function envarmensajeAction()
  {

    error_reporting(E_ALL);

    // Inicia la sesión si no está ya iniciada
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }






    error_reporting(E_ALL);

    // Recibir los datos enviados en formato JSON
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Verificar si la decodificación fue exitosa y si se recibieron los datos esperados
    $nombre = $this->sanitizarEntrada($data['nombre']);
    $correo = $this->sanitizarEntrada($data['correo']);
    
    $email = $this->sanitizarEntrada($data['email']);


    $asunto = $this->sanitizarEntrada($data['asunto']);
    $mensaje = $this->sanitizarEntrada($data['mensaje']);
    $g_recaptcha_response = $this->sanitizarEntrada($data['g-recaptcha-response']);
    $hash = $this->sanitizarEntrada($data['hash']);
    $csrf = $this->sanitizarEntrada($data['csrf']);
    $csrf_section = $this->sanitizarEntrada($data['csrf_section']);
    $csrf_token = $this->sanitizarEntrada($data['csrf_token']);

    $data2["nombre"] = $nombre;
    $data2["correo"] = $correo;
    $data2["asunto"] = $asunto;
    $datra2["mensajes"] = $mensaje;

   
   

    if (!isset($csrf_token) ||  $csrf_token !== $_SESSION['csrf_token']) {
      die('Token CSRF inválido');
    }




    if ($email == "") {
      if ($nombre != "" and $correo != "" and $asunto != ""  and $mensaje != "") {
        if (
          strpos($asunto, "@") === false &&
          strpos($nombre, "@") === false &&
          strpos($correo, "mail4u.life") === false &&
          strpos($correo, "zetetic.sbs") === false &&
          strpos($correo, "zetetic.sbs") === false &&
          strpos($mensaje, "<a") === false &&
          strpos($mensaje, "'") === false &&
          strpos($mensaje, "/") === false &&
          strpos($mensaje, "//") === false &&
          strpos($mensaje, "http") === false &&
          strpos($mensaje, "@") === false &&
          strpos($mensaje, ".co") === false &&

          strpos($mensaje, "!") === false &&
          strpos($mensaje, "Hi ") === false &&


          strpos($mensaje, "%") === false &&
          strpos($mensaje, "\'") === false &&
          strpos($mensaje, "`") === false &&
          strpos($mensaje, "\\") === false

        ) {
          // No hay ning煤n enlace, script, ' o / o \ en $mensaje
          $mail = new Core_Model_Sendingemail($this->_view);
          $mail_response = $mail->sendMailContact($data2);
        } else {
          $res['error'] = "Error de validaci贸n";
        }
      } else {
        $res['error'] = "error campos";
      }
    } else {
      $res['error'] = "error honey";
    }

    
    if ($mail_response == 1) {
      $res['status'] = "success";
    } else {
      $res['status'] = "error";
    }

    die(json_encode($res));
  }

  public function sanitizarEntrada($value)
  {
    
    $currentValue = trim($value);
    $currentValue = stripslashes($currentValue);
    $currentValue = htmlspecialchars($currentValue, ENT_QUOTES, 'UTF-8');
    $currentValue = strip_tags($currentValue);
    $currentValue = preg_replace('/[\x00-\x1F\x7F]/u', '', $currentValue);
    return $currentValue;
  }
}
