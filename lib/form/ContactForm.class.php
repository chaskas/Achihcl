<?php

class ContactForm extends BaseForm
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormInputText(array('label' => 'Nombre'), array('class' => 'contact-form-input','onclick' => 'this.value = "";')),
      'email'        => new sfWidgetFormInputText(array('label' => 'Email'), array('class' => 'contact-form-input','onclick' => 'this.value = "";')),
      'subject'      => new sfWidgetFormInputText(array('label' => 'Asunto'), array('class' => 'contact-form-input','onclick' => 'this.value = "";')),
      'message'      => new sfWidgetFormTextarea(array('label' => 'Mensaje'), array('class' => 'contact-form-input-area','onclick' => 'this.value = "";')),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorString(array('required'=>true)),
      'email'       => new sfValidatorEmail(array('required'=>true)),
      'subject'     => new sfValidatorString(array('required'=>true)),
      'message'     => new sfValidatorString(array('required'=>true)),
    ));
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->widgetSchema->setFormFormatterName('table');
  }
}
