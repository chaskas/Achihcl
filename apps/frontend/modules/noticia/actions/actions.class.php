<?php

/**
 * noticia actions.
 *
 * @package    achihcl
 * @subpackage noticia
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class noticiaActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->noticia = Doctrine_Core::getTable('Noticia')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->noticia);
  }
}
