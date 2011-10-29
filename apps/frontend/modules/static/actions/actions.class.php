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
//    $this->noticias = Doctrine_Core::getTable('Noticia')
//      ->createQuery('a')
//      ->orderBy('a.created_at DESC')
//      ->execute();
    
    $this->pager = new sfDoctrinePager('Noticia', sfConfig::get('app_max_noticias_on_index'));
    $this->pager->setQuery(Doctrine::getTable('Noticia')
            ->createQuery('a')
            ->orderBy('a.created_at DESC')
            );
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    
    $this->empresas_colaboradoras = Doctrine_Core::getTable('EmpresaColaboradora')
      ->createQuery('a')
      ->orderBy('a.nombre ASC')
      ->execute();
  }
  public function executeEventos(sfWebRequest $request)
  {
    $this->eventos = Doctrine_Core::getTable('Evento')
      ->createQuery('a')
      ->orderBy('a.inicio_at DESC')
      ->execute();
  }
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new ContactForm();
  }
  public function executeLinks(sfWebRequest $request)
  {
    $this->links = Doctrine_Core::getTable('Link')
      ->createQuery('a')
      ->orderBy('a.titulo ASC')
      ->execute();
  }
  public function executeDocs(sfWebRequest $request)
  {
    $this->docs = Doctrine_Core::getTable('Doc')
      ->createQuery('a')
      ->orderBy('a.created_at DESC')
      ->execute();
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
