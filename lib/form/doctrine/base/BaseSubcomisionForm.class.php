<?php

/**
 * Subcomision form base class.
 *
 * @method Subcomision getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubcomisionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'comision_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comision'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorPass(),
      'descripcion' => new sfValidatorPass(),
      'comision_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comision'))),
    ));

    $this->widgetSchema->setNameFormat('subcomision[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subcomision';
  }

}
