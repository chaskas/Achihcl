<?php

/**
 * tema actions.
 *
 * @package    achihcl
 * @subpackage tema
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class temaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->temas = Doctrine_Core::getTable('Tema')
      ->createQuery('a')
      ->execute();
  }
  public function executeShowTemasByForo(sfWebRequest $request)
  {
    $this->fid = $request->getParameter('fid');

    $this->temas = Doctrine_Core::getTable('Tema')
      ->createQuery('a')
      ->where('foro_id = '.$this->fid)
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->tema);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TemaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TemaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id')));
    $this->form = new TemaForm($tema);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id')));
    $this->form = new TemaForm($tema);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id')));
    $tema->delete();

    $this->redirect('tema/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tema = $form->save();

      $this->redirect('tema/edit?id='.$tema->getId());
    }
  }
}
