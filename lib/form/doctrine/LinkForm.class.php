<?php

/**
 * Link form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LinkForm extends BaseLinkForm
{
  public function configure()
  {
    $this->validatorSchema['link'] = new sfValidatorURL();
  }
}
