<?php

/**
 * Evento form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventoForm extends BaseEventoForm
{
  public function configure()
  {
    $this->widgetSchema['inicio_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}','culture'=>'es'));
    $this->widgetSchema['inicio_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['fin_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}','culture'=>'es'));
    $this->widgetSchema['fin_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    
    $this->widgetSchema['descripcion']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'height'=> 200,'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,fontselect,fontsizeselect,forecolor,blockquote,image,code",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : "",
         theme_advanced_resizing : true,
         theme_advanced_resizing_min_width : 400,
         theme_advanced_resizing_min_height: 200'));
    
    $this->widgetSchema['afiche'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Afiche',
                'file_src' => '/uploads/afiches/' . $this->getObject()->getAfiche(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar',
                'template' => '<div align="center">%input%</br>%delete% %delete_label%</div>',
            ));

    $this->validatorSchema['afiche'] = new sfValidatorFile(array(
                
                'path' => sfConfig::get('sf_upload_dir') . '/afiches',
                'required' => false,
                'validated_file_class' => 'sfValidatedFileOriginalName'
            ));

    $this->validatorSchema['afiche_delete'] = new sfValidatorBoolean();
    
    $this->validatorSchema['nombre'] = new sfValidatorString();
    $this->validatorSchema['descripcion'] = new sfValidatorString(array('required' => false));
    $this->validatorSchema['ubicacion'] = new sfValidatorString();
    $this->validatorSchema['inicio_at'] = new sfValidatorDate();
    $this->validatorSchema['fin_at'] = new sfValidatorDate(array('required' => false));
    $this->validatorSchema['costo'] = new sfValidatorString(array('required' => false));
  }
}
