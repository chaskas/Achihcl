<?php

/**
 * empleos actions.
 *
 * @package    achihcl
 * @subpackage empleos
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empleosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pager = new sfDoctrinePager('Empleo', sfConfig::get('app_max_empleos'));
    $this->pager->setQuery(
            Doctrine::getTable('Empleo')
            ->createQuery('a')
            ->OrderBy('created_at DESC')
            );
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EmpleoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EmpleoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($empleo = Doctrine_Core::getTable('Empleo')->find(array($request->getParameter('id'))), sprintf('Object empleo does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpleoForm($empleo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($empleo = Doctrine_Core::getTable('Empleo')->find(array($request->getParameter('id'))), sprintf('Object empleo does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpleoForm($empleo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($empleo = Doctrine_Core::getTable('Empleo')->find(array($request->getParameter('id'))), sprintf('Object empleo does not exist (%s).', $request->getParameter('id')));
    $empleo->delete();

    $this->redirect('empleos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $empleo = $form->save();

      $this->redirect('empleos/edit?id='.$empleo->getId());
    }
  }
}
