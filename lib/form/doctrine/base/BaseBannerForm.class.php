<?php

/**
 * Banner form base class.
 *
 * @method Banner getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBannerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'titulo'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'enlace'      => new sfWidgetFormInputText(),
      'activo'      => new sfWidgetFormInputCheckbox(),
      'slide'       => new sfWidgetFormInputText(),
      'slide_x1'    => new sfWidgetFormInputText(),
      'slide_y1'    => new sfWidgetFormInputText(),
      'slide_x2'    => new sfWidgetFormInputText(),
      'slide_y2'    => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'      => new sfValidatorPass(),
      'descripcion' => new sfValidatorPass(),
      'enlace'      => new sfValidatorPass(array('required' => false)),
      'activo'      => new sfValidatorBoolean(array('required' => false)),
      'slide'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'slide_x1'    => new sfValidatorInteger(array('required' => false)),
      'slide_y1'    => new sfValidatorInteger(array('required' => false)),
      'slide_x2'    => new sfValidatorInteger(array('required' => false)),
      'slide_y2'    => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('banner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banner';
  }

}
