<?php

/**
 * Empleo form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpleoForm extends BaseEmpleoForm
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

    $this->widgetSchema['tipo'] = new sfWidgetFormChoice(array(
      'choices' => array('Full Time', 'Part Time', 'Por horas', 'Temporal', 'Freelance')
    ));

    $this->validatorSchema['titulo'] = new sfValidatorString();
    $this->validatorSchema['descripcion'] = new sfValidatorString();
    $this->validatorSchema['ciudad'] = new sfValidatorString();
    $this->validatorSchema['region'] = new sfValidatorString();
    $this->validatorSchema['duracion'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['tipo'] = new sfValidatorString();
    $this->validatorSchema['sueldo'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['empresa'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['nombre_contacto'] = new sfValidatorString();
    $this->validatorSchema['telefono_contacto'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['email_contacto'] = new sfValidatorString();

    unset(
            $this['created_at'],
            $this['updated_at']
         );
  }
}
