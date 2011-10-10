<?php

/**
 * Miembro form base class.
 *
 * @method Miembro getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMiembroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'apellido'          => new sfWidgetFormInputText(),
      'nacimiento_at'     => new sfWidgetFormDateTime(),
      'rut'               => new sfWidgetFormInputText(),
      'nacionalidad'      => new sfWidgetFormInputText(),
      'profesion'         => new sfWidgetFormInputText(),
      'institucion'       => new sfWidgetFormInputText(),
      'direccion'         => new sfWidgetFormInputText(),
      'comuna'            => new sfWidgetFormInputText(),
      'ciudad'            => new sfWidgetFormInputText(),
      'pais'              => new sfWidgetFormInputText(),
      'telefono'          => new sfWidgetFormInputText(),
      'fax'               => new sfWidgetFormInputText(),
      'email'             => new sfWidgetFormInputText(),
      'empresa'           => new sfWidgetFormInputText(),
      'cargo'             => new sfWidgetFormInputText(),
      'direccion_empresa' => new sfWidgetFormInputText(),
      'comuna_empresa'    => new sfWidgetFormInputText(),
      'ciudad_empresa'    => new sfWidgetFormInputText(),
      'pais_empresa'      => new sfWidgetFormInputText(),
      'telefono_empresa'  => new sfWidgetFormInputText(),
      'fax_empresa'       => new sfWidgetFormInputText(),
      'email_empresa'     => new sfWidgetFormInputText(),
      'isAprobado'        => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'            => new sfValidatorPass(),
      'apellido'          => new sfValidatorPass(),
      'nacimiento_at'     => new sfValidatorDateTime(array('required' => false)),
      'rut'               => new sfValidatorPass(),
      'nacionalidad'      => new sfValidatorPass(array('required' => false)),
      'profesion'         => new sfValidatorPass(array('required' => false)),
      'institucion'       => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
      'comuna'            => new sfValidatorPass(array('required' => false)),
      'ciudad'            => new sfValidatorPass(array('required' => false)),
      'pais'              => new sfValidatorPass(array('required' => false)),
      'telefono'          => new sfValidatorPass(array('required' => false)),
      'fax'               => new sfValidatorPass(array('required' => false)),
      'email'             => new sfValidatorPass(),
      'empresa'           => new sfValidatorPass(array('required' => false)),
      'cargo'             => new sfValidatorPass(array('required' => false)),
      'direccion_empresa' => new sfValidatorPass(array('required' => false)),
      'comuna_empresa'    => new sfValidatorPass(array('required' => false)),
      'ciudad_empresa'    => new sfValidatorPass(array('required' => false)),
      'pais_empresa'      => new sfValidatorPass(array('required' => false)),
      'telefono_empresa'  => new sfValidatorPass(array('required' => false)),
      'fax_empresa'       => new sfValidatorPass(array('required' => false)),
      'email_empresa'     => new sfValidatorPass(array('required' => false)),
      'isAprobado'        => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('miembro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Miembro';
  }

}
