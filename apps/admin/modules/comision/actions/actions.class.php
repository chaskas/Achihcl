<?php

/**
 * comision actions.
 *
 * @package    achihcl
 * @subpackage comision
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comisionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->comisions = Doctrine_Core::getTable('Comision')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->comision = Doctrine_Core::getTable('Comision')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->comision);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ComisionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ComisionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comision = Doctrine_Core::getTable('Comision')->find(array($request->getParameter('id'))), sprintf('Object comision does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComisionForm($comision);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comision = Doctrine_Core::getTable('Comision')->find(array($request->getParameter('id'))), sprintf('Object comision does not exist (%s).', $request->getParameter('id')));
    $this->form = new ComisionForm($comision);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comision = Doctrine_Core::getTable('Comision')->find(array($request->getParameter('id'))), sprintf('Object comision does not exist (%s).', $request->getParameter('id')));
    $comision->delete();

    $this->redirect('comision/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comision = $form->save();

      $this->redirect('comision/edit?id='.$comision->getId());
    }
  }
}
