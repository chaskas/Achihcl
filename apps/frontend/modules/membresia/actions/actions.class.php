<?php

/**
 * membresia actions.
 *
 * @package    achihcl
 * @subpackage membresia
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class membresiaActions extends sfActions {

  public function executeNew(sfWebRequest $request) {
    $this->form = new MiembroForm();
  }

  public function executeCreate(sfWebRequest $request) {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MiembroForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processForm(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    $captcha = array(
        'recaptcha_challenge_field' => $request->getParameter('recaptcha_challenge_field'),
        'recaptcha_response_field' => $request->getParameter('recaptcha_response_field'),
    );
    $this->form->bind(array_merge($request->getParameter('miembro'), array('captcha' => $captcha)));

    if ($form->isValid()) {
      $miembro = $form->save();

      //Enviar mail de aviso que alguien se registro
      $message =  "<html>".
                  "<head><title>Contacto Achih</title></head>".
                  "<body>".
                  "<img src='http://www.achih.cl/images/logo-med.png'/>".
                  "<br/>".
                  "<h3>Nuevo Usuario</h3>".
                  "<p>Un nuevo usuario desea ser miembro de ACHIH</p>".
                  "<p>Puede revisar la lista de usuarios postulantes haciendo click <a href='http://www.achih.cl/admin.php/membresia/aprobarMiembros'>aqu&iacute;</a></p>".
                  "</body>".
                  "</html>";

      $mensaje = Swift_Message::newInstance()
        ->setFrom(array('contacto@achih.cl' => 'Contacto ACHIH'))
        ->setTo(array('contacto@achih.cl')) //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
        ->setBcc(array('admin@webdevel.cl'))
        ->setSubject('Nuevo solicitud de miembro desde www.achih.cl')
        ->setBody($message,'text/html')
      ;
      $headers = $mensaje->getHeaders();
      $headers->addTextHeader('Organization', 'ACHIH');
      $headers->addTextHeader('Reply-To', 'ACHIH <contacto@achih.cl>');
      $headers->addTextHeader('From', 'ACHIH <contacto@achih.cl>');
      $headers->addTextHeader('X-Mailer', 'SwiftMailer v4.0.6');

      $this->getMailer()->send($mensaje);

      $this->redirect('membresia/gracias');
    }
  }

  public function executeGracias(sfWebRequest $request) {
    
  }

}
