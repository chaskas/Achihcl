<?php

/**
 * empresas actions.
 *
 * @package    achihcl
 * @subpackage empresas
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empresasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->empresa_colaboradoras = Doctrine_Core::getTable('EmpresaColaboradora')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EmpresaColaboradoraForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EmpresaColaboradoraForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($empresa_colaboradora = Doctrine_Core::getTable('EmpresaColaboradora')->find(array($request->getParameter('id'))), sprintf('Object empresa_colaboradora does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpresaColaboradoraForm($empresa_colaboradora);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($empresa_colaboradora = Doctrine_Core::getTable('EmpresaColaboradora')->find(array($request->getParameter('id'))), sprintf('Object empresa_colaboradora does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmpresaColaboradoraForm($empresa_colaboradora);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($empresa_colaboradora = Doctrine_Core::getTable('EmpresaColaboradora')->find(array($request->getParameter('id'))), sprintf('Object empresa_colaboradora does not exist (%s).', $request->getParameter('id')));
    $empresa_colaboradora->delete();

    $this->redirect('empresas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $empresa_colaboradora = $form->save();

      $this->redirect('empresas/edit?id='.$empresa_colaboradora->getId());
    }
  }
}
