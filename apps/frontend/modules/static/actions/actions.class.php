<?php

/**
 * static actions.
 *
 * @package    achihcl
 * @subpackage static
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new ContactForm();
  }
  public function executeSendmail(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('POST'));

    $name     = $request->getParameter('name');
    $email    = $request->getParameter('email');
    $subject  = $request->getParameter('subject');
    $pre_message  = $request->getParameter('message');

    $message = $name."\n".$email."\n\nDice:\n\nAsunto: ".$subject."\n\n".$pre_message;

    $mensaje = Swift_Message::newInstance()
      ->setFrom($email)
      ->setTo(array('contacto@achih.cl')) //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
      ->setBcc(array('admin@webdevel.cl'))
      ->setSubject('Nuevo mensaje desde www.achih.cl')
      ->setBody($message)
    ;

    $this->getMailer()->send($mensaje);
    
    $this->getResponse()->setContent('El mensaje ha sido enviado satisfactoriamente...');
    
    return sfView::NONE;
  }
}
