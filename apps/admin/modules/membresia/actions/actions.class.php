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
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->miembro);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MiembroForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MiembroForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id'))), sprintf('Object miembro does not exist (%s).', $request->getParameter('id')));
    $this->form = new MiembroForm($miembro);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($miembro = Doctrine_Core::getTable('Miembro')->find(array($request->getParameter('id'))), sprintf('Object miembro does not exist (%s).', $request->getParameter('id')));
    $this->form = new MiembroForm($miembro);

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
}