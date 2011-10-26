<?php

/**
 * Empleo filter form base class.
 *
 * @package    achihcl
 * @subpackage filter
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpleoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'region'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'duracion'          => new sfWidgetFormFilterInput(),
      'tipo'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sueldo'            => new sfWidgetFormFilterInput(),
      'empresa'           => new sfWidgetFormFilterInput(),
      'nombre_contacto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono_contacto' => new sfWidgetFormFilterInput(),
      'email_contacto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'titulo'            => new sfValidatorPass(array('required' => false)),
      'descripcion'       => new sfValidatorPass(array('required' => false)),
      'ciudad'            => new sfValidatorPass(array('required' => false)),
      'region'            => new sfValidatorPass(array('required' => false)),
      'duracion'          => new sfValidatorPass(array('required' => false)),
      'tipo'              => new sfValidatorPass(array('required' => false)),
      'sueldo'            => new sfValidatorPass(array('required' => false)),
      'empresa'           => new sfValidatorPass(array('required' => false)),
      'nombre_contacto'   => new sfValidatorPass(array('required' => false)),
      'telefono_contacto' => new sfValidatorPass(array('required' => false)),
      'email_contacto'    => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('empleo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empleo';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'titulo'            => 'Text',
      'descripcion'       => 'Text',
      'ciudad'            => 'Text',
      'region'            => 'Text',
      'duracion'          => 'Text',
      'tipo'              => 'Text',
      'sueldo'            => 'Text',
      'empresa'           => 'Text',
      'nombre_contacto'   => 'Text',
      'telefono_contacto' => 'Text',
      'email_contacto'    => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
