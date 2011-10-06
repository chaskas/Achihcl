<?php

/**
 * links actions.
 *
 * @package    achihcl
 * @subpackage links
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linksActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->links = Doctrine_Core::getTable('Link')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->link = Doctrine_Core::getTable('Link')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->link);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LinkForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LinkForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($link = Doctrine_Core::getTable('Link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new LinkForm($link);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($link = Doctrine_Core::getTable('Link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new LinkForm($link);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($link = Doctrine_Core::getTable('Link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $link->delete();

    $this->redirect('links/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $link = $form->save();

      $this->redirect('links/edit?id='.$link->getId());
    }
  }
}
