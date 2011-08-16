<?php

/**
 * Foro form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ForoForm extends BaseForoForm
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

    $this->widgetSchema['created_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}','culture'=>'es'));
    $this->widgetSchema['created_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['updated_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}','culture'=>'es'));
    $this->widgetSchema['updated_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');

    $this->widgetSchema->setLabels(array(
        'descripcion'   => 'Descripci&oacute;n',
        'ntopics'       => 'Temas',
        'nposts'        =>  'Posts',
        'created_at'    => 'Creado el',
        'updated_at'    => 'Modificado el',
        'created_by'    => 'Creado por',
        'updated_by'    => 'Modificado por',
    ));
  }
}
