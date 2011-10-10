<?php

/**
 * Miembro filter form base class.
 *
 * @package    achihcl
 * @subpackage filter
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMiembroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nacimiento_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'rut'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nacionalidad'      => new sfWidgetFormFilterInput(),
      'profesion'         => new sfWidgetFormFilterInput(),
      'institucion'       => new sfWidgetFormFilterInput(),
      'direccion'         => new sfWidgetFormFilterInput(),
      'comuna'            => new sfWidgetFormFilterInput(),
      'ciudad'            => new sfWidgetFormFilterInput(),
      'pais'              => new sfWidgetFormFilterInput(),
      'telefono'          => new sfWidgetFormFilterInput(),
      'fax'               => new sfWidgetFormFilterInput(),
      'email'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empresa'           => new sfWidgetFormFilterInput(),
      'cargo'             => new sfWidgetFormFilterInput(),
      'direccion_empresa' => new sfWidgetFormFilterInput(),
      'comuna_empresa'    => new sfWidgetFormFilterInput(),
      'ciudad_empresa'    => new sfWidgetFormFilterInput(),
      'pais_empresa'      => new sfWidgetFormFilterInput(),
      'telefono_empresa'  => new sfWidgetFormFilterInput(),
      'fax_empresa'       => new sfWidgetFormFilterInput(),
      'email_empresa'     => new sfWidgetFormFilterInput(),
      'isAprobado'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'apellido'          => new sfValidatorPass(array('required' => false)),
      'nacimiento_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rut'               => new sfValidatorPass(array('required' => false)),
      'nacionalidad'      => new sfValidatorPass(array('required' => false)),
      'profesion'         => new sfValidatorPass(array('required' => false)),
      'institucion'       => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
      'comuna'            => new sfValidatorPass(array('required' => false)),
      'ciudad'            => new sfValidatorPass(array('required' => false)),
      'pais'              => new sfValidatorPass(array('required' => false)),
      'telefono'          => new sfValidatorPass(array('required' => false)),
      'fax'               => new sfValidatorPass(array('required' => false)),
      'email'             => new sfValidatorPass(array('required' => false)),
      'empresa'           => new sfValidatorPass(array('required' => false)),
      'cargo'             => new sfValidatorPass(array('required' => false)),
      'direccion_empresa' => new sfValidatorPass(array('required' => false)),
      'comuna_empresa'    => new sfValidatorPass(array('required' => false)),
      'ciudad_empresa'    => new sfValidatorPass(array('required' => false)),
      'pais_empresa'      => new sfValidatorPass(array('required' => false)),
      'telefono_empresa'  => new sfValidatorPass(array('required' => false)),
      'fax_empresa'       => new sfValidatorPass(array('required' => false)),
      'email_empresa'     => new sfValidatorPass(array('required' => false)),
      'isAprobado'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('miembro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Miembro';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'nombre'            => 'Text',
      'apellido'          => 'Text',
      'nacimiento_at'     => 'Date',
      'rut'               => 'Text',
      'nacionalidad'      => 'Text',
      'profesion'         => 'Text',
      'institucion'       => 'Text',
      'direccion'         => 'Text',
      'comuna'            => 'Text',
      'ciudad'            => 'Text',
      'pais'              => 'Text',
      'telefono'          => 'Text',
      'fax'               => 'Text',
      'email'             => 'Text',
      'empresa'           => 'Text',
      'cargo'             => 'Text',
      'direccion_empresa' => 'Text',
      'comuna_empresa'    => 'Text',
      'ciudad_empresa'    => 'Text',
      'pais_empresa'      => 'Text',
      'telefono_empresa'  => 'Text',
      'fax_empresa'       => 'Text',
      'email_empresa'     => 'Text',
      'isAprobado'        => 'Boolean',
    );
  }
}
