<?php

class EmailmasivoForm extends sfForm
{
  public function configure()
  {
    $this->widgetSchema['subject'] = new sfWidgetFormInputText(array('label' => 'Asunto'), array('class' => 'text-input large-input'));
    
    $this->widgetSchema['message']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'height'=> 200,'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,fontselect,fontsizeselect,forecolor,blockquote",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : "",
         theme_advanced_resizing : true,
         theme_advanced_resizing_min_width : 400,
         theme_advanced_resizing_min_height: 200'));

    $this->validatorSchema['subject'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['message'] = new sfValidatorString(array('required'=>true));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->widgetSchema->setNameFormat('email[%s]');

  }
}
