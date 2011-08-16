<?php

/**
 * subcomision actions.
 *
 * @package    achihcl
 * @subpackage subcomision
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class subcomisionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->subcomisions = Doctrine_Core::getTable('Subcomision')
      ->createQuery('a')
      ->execute();
  }
  public function executeShowSubcomisionsByComision(sfWebRequest $request)
  {

    $this->comision = Doctrine_Core::getTable('Comision')
      ->findOneById($request->getParameter('id'));

    $this->subcomisions = Doctrine_Core::getTable('Subcomision')
      ->createQuery('b')
      ->where('comision_id = '.$this->comision->getId())
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->subcomision = Doctrine_Core::getTable('Subcomision')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->subcomision);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->cid = $request->getParameter('cid');
    $this->form = new SubcomisionForm();

  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SubcomisionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($subcomision = Doctrine_Core::getTable('Subcomision')->find(array($request->getParameter('id'))), sprintf('Object subcomision does not exist (%s).', $request->getParameter('id')));
    $this->form = new SubcomisionForm($subcomision);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($subcomision = Doctrine_Core::getTable('Subcomision')->find(array($request->getParameter('id'))), sprintf('Object subcomision does not exist (%s).', $request->getParameter('id')));
    $this->form = new SubcomisionForm($subcomision);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->cid = $request->getParameter('cid');
    $request->checkCSRFProtection();

    $this->forward404Unless($subcomision = Doctrine_Core::getTable('Subcomision')->find(array($request->getParameter('id'))), sprintf('Object subcomision does not exist (%s).', $request->getParameter('id')));
    $subcomision->delete();

    $this->redirect('subcomision/ShowSubcomisionsByComision?id='.$this->cid);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $subcomision = $form->save();

      $this->redirect('subcomision/edit?id='.$subcomision->getId());
    }
  }
}
