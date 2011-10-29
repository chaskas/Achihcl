<?php

/**
 * docs actions.
 *
 * @package    achihcl
 * @subpackage docs
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class docsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pager = new sfDoctrinePager('Doc', sfConfig::get('app_max_docs'));
    $this->pager->setQuery(
            Doctrine::getTable('Doc')
            ->createQuery('a')
            );
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DocForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DocForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($doc = Doctrine_Core::getTable('Doc')->find(array($request->getParameter('id'))), sprintf('Object doc does not exist (%s).', $request->getParameter('id')));
    $this->form = new DocForm($doc);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($doc = Doctrine_Core::getTable('Doc')->find(array($request->getParameter('id'))), sprintf('Object doc does not exist (%s).', $request->getParameter('id')));
    $this->form = new DocForm($doc);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($doc = Doctrine_Core::getTable('Doc')->find(array($request->getParameter('id'))), sprintf('Object doc does not exist (%s).', $request->getParameter('id')));
    $doc->delete();

    $this->redirect('docs/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $doc = $form->save();

      $this->redirect('docs/index');
    }
  }
}
