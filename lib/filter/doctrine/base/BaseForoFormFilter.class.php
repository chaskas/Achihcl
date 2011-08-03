<?php

/**
 * Foro filter form base class.
 *
 * @package    achihcl
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseForoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ntopics'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nposts'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subcomision_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subcomision'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
      'ntopics'        => new sfValidatorPass(array('required' => false)),
      'nposts'         => new sfValidatorPass(array('required' => false)),
      'subcomision_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subcomision'), 'column' => 'id')),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('foro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Foro';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nombre'         => 'Text',
      'descripcion'    => 'Text',
      'ntopics'        => 'Text',
      'nposts'         => 'Text',
      'subcomision_id' => 'ForeignKey',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'created_by'     => 'ForeignKey',
      'updated_by'     => 'ForeignKey',
    );
  }
}
