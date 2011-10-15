<?php

/**
 * EmpresaColaboradora form base class.
 *
 * @method EmpresaColaboradora getObject() Returns the current form's model object
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpresaColaboradoraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorPass(),
      'logo'        => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('empresa_colaboradora[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpresaColaboradora';
  }

}
