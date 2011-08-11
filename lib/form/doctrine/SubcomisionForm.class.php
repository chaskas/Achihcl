<?php

/**
 * Subcomision form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SubcomisionForm extends BaseSubcomisionForm
{
  public function configure()
  {
    $this->widgetSchema['descripcion']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'height'=> 200,'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,fontselect,fontsizeselect,forecolor,blockquote",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : "",
         theme_advanced_resizing : true,
         theme_advanced_resizing_min_width : 400,
         theme_advanced_resizing_min_height: 200'));

    $this->widgetSchema->setLabels(array(
       'descripcion' => 'Descripci&oacute;n'
    ));
  }
}
