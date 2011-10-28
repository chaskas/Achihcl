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
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->empleos = Doctrine_Core::getTable('Empleo')
      ->createQuery('a')
      ->OrderBy('created_at DESC')
      ->execute();
  }
  public function executeShow(sfWebRequest $request)
  {
    $this->empleo = Doctrine_Core::getTable('Empleo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->empleo);
  }
}
