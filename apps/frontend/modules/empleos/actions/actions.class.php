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
    $this->pager = new sfDoctrinePager('Noticia', sfConfig::get('app_max_empleos_on_index'));
    
    $this->pager->setQuery(
            Doctrine::getTable('Empleo')
            ->createQuery('a')
            ->orderBy('a.created_at DESC')
            );
    
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }
  public function executeShow(sfWebRequest $request)
  {
    $this->empleo = Doctrine_Core::getTable('Empleo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->empleo);
  }
}
