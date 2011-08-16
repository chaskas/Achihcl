<?php

/**
 * foro actions.
 *
 * @package    achihcl
 * @subpackage foro
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class foroActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->foros = Doctrine_Core::getTable('Foro')
      ->createQuery('a')
      ->execute();
  }
  public function executeShowForosBySubcomision(sfWebRequest $request)
  {
//    $this->comision = Doctrine_Core::getTable('Comision')
//      ->findOneById($request->getParameter('cid'));

    $this->subcomision = Doctrine_Core::getTable('Subcomision')
      ->findOneById($request->getParameter('scid'));

    $this->foros = Doctrine_Core::getTable('Foro')
      ->createQuery('a')
      ->where('subcomision_id = '.$this->subcomision->getId())
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->foro = Doctrine_Core::getTable('Foro')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->foro);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->scid = $request->getParameter('scid');
    $this->form = new ForoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ForoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($foro = Doctrine_Core::getTable('Foro')->find(array($request->getParameter('id'))), sprintf('Object foro does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForoForm($foro);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($foro = Doctrine_Core::getTable('Foro')->find(array($request->getParameter('id'))), sprintf('Object foro does not exist (%s).', $request->getParameter('id')));
    $this->form = new ForoForm($foro);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->scid = $request->getParameter('scid');
    $request->checkCSRFProtection();

    $this->forward404Unless($foro = Doctrine_Core::getTable('Foro')->find(array($request->getParameter('id'))), sprintf('Object foro does not exist (%s).', $request->getParameter('id')));
    $foro->delete();

    $this->redirect('foro/ShowForosBySubcomision?scid='.$this->scid);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $foro = $form->save();

      $this->redirect('foro/edit?id='.$foro->getId());
    }
  }
}
