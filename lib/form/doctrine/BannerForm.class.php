<?php

/**
 * Banner form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BannerForm extends BaseBannerForm
{
  public function configure()
  {
    $this->getObject()->configureJCropWidgets($this);
    $this->getObject()->configureJCropValidators($this);
    
    $this->widgetSchema['descripcion']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'height'=> 200,'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,bullist,numlist,fontsizeselect,code",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : "",
         theme_advanced_resizing : true,
         theme_advanced_resizing_min_width : 400,
         theme_advanced_resizing_min_height: 200'));
    
    $this->validatorSchema['titulo'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['descripcion'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['enlace'] = new sfValidatorUrl(array('required'=>false));
    
    unset($this['created_at'],$this['updated_at']);
  }
}
