<?php

/**
 * Miembro form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MiembroForm extends BaseMiembroForm
{
  public function configure()
  {
    $this->widgetSchema['nacimiento_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}','culture'=>'es'));
    $this->widgetSchema['nacimiento_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    
    $this->widgetSchema['pais'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL'));
    $this->widgetSchema['pais_empresa'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL'));
 
    $this->validatorSchema['nombre']              = new sfValidatorString();
    $this->validatorSchema['apellido']            = new sfValidatorString();
    $this->validatorSchema['nacimiento_at']       = new sfValidatorDate(array('required' => false));
    $this->validatorSchema['rut']                 = new sfValidatorRut();
    $this->validatorSchema['nacionalidad']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['profesion']           = new sfValidatorString(array('required' => false));
    $this->validatorSchema['institucion']         = new sfValidatorString(array('required' => false));
    $this->validatorSchema['direccion']           = new sfValidatorString(array('required' => false));
    $this->validatorSchema['comuna']              = new sfValidatorString(array('required' => false));
    $this->validatorSchema['ciudad']              = new sfValidatorString(array('required' => false));
    $this->validatorSchema['pais']                = new sfValidatorString(array('required' => false));
    $this->validatorSchema['telefono']            = new sfValidatorString(array('required' => false));
    $this->validatorSchema['fax']                 = new sfValidatorString(array('required' => false));
    $this->validatorSchema['email']               = new sfValidatorEmail();
    $this->validatorSchema['empresa']             = new sfValidatorString(array('required' => false));
    $this->validatorSchema['cargo']               = new sfValidatorString(array('required' => false));
    $this->validatorSchema['direccion_empresa']   = new sfValidatorString(array('required' => false));
    $this->validatorSchema['comuna_empresa']      = new sfValidatorString(array('required' => false));
    $this->validatorSchema['ciudad_empresa']      = new sfValidatorString(array('required' => false));
    $this->validatorSchema['pais_empresa']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['telefono_empresa']    = new sfValidatorString(array('required' => false));
    $this->validatorSchema['fax_empresa']         = new sfValidatorString(array('required' => false));
    $this->validatorSchema['email_empresa']       = new sfValidatorEmail(array('required' => false));
    $this->validatorSchema['isAprobado']          = new sfValidatorBoolean();
    
    unset(
      $this['isAprobado']
    );
  }
}
