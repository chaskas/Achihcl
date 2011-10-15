<?php

/**
 * membresia actions.
 *
 * @package    achihcl
 * @subpackage membresia
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class membresiaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->miembros = Doctrine_Core::getTable('Miembro')
      ->createQuery('a')
      ->select('a.nombre','a.apellido','a.empresa','a.email','a.telefono')
      ->where('a.isAprobado = 1')
      ->orderBy('a.apellido ASC')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MiembroFormAdmin();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MiembroFormAdmin();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id'))), sprintf('Object miembro does not exist (%s).', $request->getParameter('id')));
    $this->form = new MiembroFormAdmin($miembro);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id'))), sprintf('Object miembro does not exist (%s).', $request->getParameter('id')));
    $this->form = new MiembroFormAdmin($miembro);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id'))), sprintf('Object miembro does not exist (%s).', $request->getParameter('id')));
    $miembro->delete();

    $this->redirect('membresia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $miembro = $form->save();

      $this->redirect('membresia/edit?id='.$miembro->getId());
    }
  }
  public function executeEmail(sfWebRequest $request)
  {
    $this->form = new EmailmasivoForm();
  }
  public function executeEmailCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->form = new EmailmasivoForm();
    $this->processEmail($request, $this->form);
    $this->setTemplate('email');
  }
  protected function processEmail(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    if ($form->isValid())
    {
      //Enviar emails masivos

      $this->miembros = Doctrine_Core::getTable('Miembro')
        ->createQuery('a')
        ->select('a.email')
        ->where('a.isAprobado = 1')
        ->execute();

      foreach($this->miembros as $miembro) {
        $message =  "<html>".
                    "<head><title>".$form->getValue('subject')."</title></head>".
                    "<body>".
                    $form->getValue('message').
                    "</body>".
                    "</html>";

        $mensaje = Swift_Message::newInstance()
          ->setFrom(array('contacto@achih.cl' => 'Contacto ACHIH'))
          ->setTo(array($miembro->getEmail())) //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
          ->setBcc(array('admin@webdevel.cl'))
          ->setSubject($form->getValue('subject'))
          ->setBody($message,'text/html')
        ;
        $headers = $mensaje->getHeaders();
        $headers->addTextHeader('Organization', 'ACHIH');
        $headers->addTextHeader('Reply-To', 'ACHIH <contacto@achih.cl>');
        $headers->addTextHeader('From', 'ACHIH <contacto@achih.cl>');
        $headers->addTextHeader('X-Mailer', 'SwiftMailer v4.0.6');

        $this->getMailer()->send($mensaje);
        
      }
      $this->redirect('membresia/sent');
    }
  }
  public function executeSent(sfWebRequest $request)
  {
    
  }
  public function executeAprobarMiembros(sfWebRequest $request)
  {
    $this->miembros = Doctrine_Core::getTable('Miembro')
      ->createQuery('a')
      ->select('a.nombre','a.apellido','a.empresa','a.email','a.telefono')
      ->where('a.isAprobado = 0')
      ->orderBy('a.apellido ASC')
      ->execute();
  }
  public function executeAprobar(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    
    $miembro = Doctrine_Core::getTable('Miembro')->find(array($id));
    $miembro->setIsAprobado(1);
    $miembro->save();
    
    $this->redirect('membresia/aprobarMiembros');
  }
}
