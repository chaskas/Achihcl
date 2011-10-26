<?php

/**
 * Empleo form base class.
 *
 * @method Empleo getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpleoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'titulo'            => new sfWidgetFormInputText(),
      'descripcion'       => new sfWidgetFormInputText(),
      'ciudad'            => new sfWidgetFormInputText(),
      'region'            => new sfWidgetFormInputText(),
      'duracion'          => new sfWidgetFormInputText(),
      'tipo'              => new sfWidgetFormInputText(),
      'sueldo'            => new sfWidgetFormInputText(),
      'empresa'           => new sfWidgetFormInputText(),
      'nombre_contacto'   => new sfWidgetFormInputText(),
      'telefono_contacto' => new sfWidgetFormInputText(),
      'email_contacto'    => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'            => new sfValidatorPass(),
      'descripcion'       => new sfValidatorPass(),
      'ciudad'            => new sfValidatorPass(),
      'region'            => new sfValidatorPass(),
      'duracion'          => new sfValidatorPass(array('required' => false)),
      'tipo'              => new sfValidatorPass(),
      'sueldo'            => new sfValidatorPass(array('required' => false)),
      'empresa'           => new sfValidatorPass(array('required' => false)),
      'nombre_contacto'   => new sfValidatorPass(),
      'telefono_contacto' => new sfValidatorPass(array('required' => false)),
      'email_contacto'    => new sfValidatorPass(),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('empleo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleo';
  }

}
