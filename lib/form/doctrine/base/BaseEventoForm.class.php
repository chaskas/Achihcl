<?php

/**
 * Evento form base class.
 *
 * @method Evento getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'ubicacion'   => new sfWidgetFormInputText(),
      'inicio_at'   => new sfWidgetFormDateTime(),
      'fin_at'      => new sfWidgetFormDateTime(),
      'valor'       => new sfWidgetFormInputText(),
      'afiche'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorPass(),
      'descripcion' => new sfValidatorPass(),
      'ubicacion'   => new sfValidatorPass(),
      'inicio_at'   => new sfValidatorDateTime(),
      'fin_at'      => new sfValidatorDateTime(array('required' => false)),
      'valor'       => new sfValidatorPass(array('required' => false)),
      'afiche'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evento';
  }

}
