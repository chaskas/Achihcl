<?php

/**
 * Post form base class.
 *
 * @method Post getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePostForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'asunto'     => new sfWidgetFormInputText(),
      'cuerpo'     => new sfWidgetFormInputText(),
      'tema_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tema'), 'add_empty' => false)),
      'foro_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Foro'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asunto'     => new sfValidatorPass(),
      'cuerpo'     => new sfValidatorPass(),
      'tema_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tema'))),
      'foro_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Foro'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Post';
  }

}
