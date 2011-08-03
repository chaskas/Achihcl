<?php

/**
 * Subcomision filter form base class.
 *
 * @package    achihcl
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSubcomisionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comision'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'comision_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comision'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('subcomision_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subcomision';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
      'comision_id' => 'ForeignKey',
    );
  }
}
