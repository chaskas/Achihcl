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
    $years = range(date('Y') - 100, date('Y'));
    $this->widgetSchema['nacimiento_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true,yearRange: "-100:+0"}','culture'=>'es','date_widget' => new sfWidgetFormDate(array('years' => array_combine($years, $years)))));
    $this->widgetSchema['nacimiento_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    
    $this->widgetSchema['pais'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL', 'default' => 'CL'));
    $this->widgetSchema['pais_empresa'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL', 'default' => 'CL'));
    
    $this->widgetSchema['sector'] = new sfWidgetFormChoice(array('choices' => array('','Privado', 'MINSAL')));
    $this->widgetSchema['rol'] = new sfWidgetFormChoice(array('choices' => array('','Director', 'Presidente','Secretario','Tesorero','Vicepresidente','Miembro Comision')));
 
    $this->validatorSchema['nombre']              = new sfValidatorString();
    $this->validatorSchema['apellido']            = new sfValidatorString();
    $this->validatorSchema['nacimiento_at']       = new sfValidatorDate(array('required' => false));
    $this->validatorSchema['rut']                 = new sfValidatorRut();
    $this->validatorSchema['nacionalidad']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['profesion']           = new sfValidatorString(array('required' => false));
    $this->validatorSchema['especialidad']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['institucion']         = new sfValidatorString(array('required' => false));
    $this->validatorSchema['sector']              = new sfValidatorString(array('required' => false));
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

    $this->widgetSchema->setLabels(array(
        'nombre'            => 'Nombre',
        'apellido'          => 'Apellido',
        'nacimiento_at'     => 'Fecha de Nacimiento',
        'profesion'         => 'Profesion',
        'institucion'       => 'Institución',
        'sector'            => 'Sector',
        'especialidad'      => 'Especialidad',
        'direccion'         => 'Dirección',
        'comuna'            => 'Comuna',
        'ciudad'            => 'Ciudad',
        'pais'              => 'País',
        'telefono'          => 'Teléfono',
        'fax'               => 'Fax',
        'email'             => 'Email',
        'empresa'           => 'Empresa o Institución',
        'direccion_empresa' => 'Dirección',
        'comuna_empresa'    => 'Comuna',
        'ciudad_empresa'    => 'Ciudad',
        'pais_empresa'      => 'País',
        'telefono_empresa'  => 'Teléfono',
        'fax_empresa'       => 'Fax',
        'email_empresa'     => 'Email',
    ));
    
    $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array(
      'public_key' => sfConfig::get('app_recaptcha_public_key'),
      'theme' => 'red',
      'culture'  => 'es'
    ));

    $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array(
      'private_key' => sfConfig::get('app_recaptcha_private_key')
    ));
    
    unset(
      $this['isAprobado'],
      $this['rol'],
      $this['comision'],
      $this['subcomision'],
      $this['cchrc']
    );
  }
}

class MiembroFormAdmin extends MiembroForm
{
  public function configure()
  {
   $years = range(date('Y') - 100, date('Y'));
    $this->widgetSchema['nacimiento_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/icons/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true,yearRange: "-100:+0"}','culture'=>'es','date_widget' => new sfWidgetFormDate(array('years' => array_combine($years, $years)))));
    $this->widgetSchema['nacimiento_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    
    $this->widgetSchema['pais'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL', 'default' => 'CL'));
    $this->widgetSchema['pais_empresa'] = new sfWidgetFormI18nChoiceCountry(array('culture'   => 'es_CL', 'default' => 'CL'));
    
    $this->widgetSchema['sector'] = new sfWidgetFormChoice(array('choices' => array('','Privado', 'MINSAL')));
    $this->widgetSchema['rol'] = new sfWidgetFormChoice(array('choices' => array('','Director', 'Presidente','Secretario','Tesorero','Vicepresidente','Miembro Comision')));

    $this->validatorSchema['nombre']              = new sfValidatorString();
    $this->validatorSchema['apellido']            = new sfValidatorString();
    $this->validatorSchema['nacimiento_at']       = new sfValidatorDate(array('required' => false));
    $this->validatorSchema['rut']                 = new sfValidatorRut();
    $this->validatorSchema['nacionalidad']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['profesion']           = new sfValidatorString(array('required' => false));
    $this->validatorSchema['institucion']         = new sfValidatorString(array('required' => false));
    $this->validatorSchema['direccion']           = new sfValidatorString(array('required' => false));
    $this->validatorSchema['especialidad']        = new sfValidatorString(array('required' => false));
    $this->validatorSchema['sector']              = new sfValidatorString(array('required' => false));
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
    $this->validatorSchema['rol']                 = new sfValidatorString(array('required' => false));
    $this->validatorSchema['comision']            = new sfValidatorString(array('required' => false));
    $this->validatorSchema['subcomision']         = new sfValidatorString(array('required' => false));
    $this->validatorSchema['cchrc']               = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema->setLabels(array(
        'nombre'            => 'Nombre',
        'apellido'          => 'Apellido',
        'nacimiento_at'     => 'Fecha de Nacimiento',
        'profesion'         => 'Profesion',
        'institucion'       => 'Institución',
        'sector'            => 'Sector',
        'especialidad'      => 'Especialidad',
        'direccion'         => 'Dirección',
        'comuna'            => 'Comuna',
        'ciudad'            => 'Ciudad',
        'pais'              => 'País',
        'telefono'          => 'Teléfono',
        'fax'               => 'Fax',
        'email'             => 'Email',
        'empresa'           => 'Empresa o Institución',
        'direccion_empresa' => 'Dirección',
        'comuna_empresa'    => 'Comuna',
        'ciudad_empresa'    => 'Ciudad',
        'pais_empresa'      => 'País',
        'telefono_empresa'  => 'Teléfono',
        'fax_empresa'       => 'Fax',
        'email_empresa'     => 'Email',
    ));
    
    $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array(
      'public_key' => sfConfig::get('app_recaptcha_public_key'),
      'theme' => 'red',
      'culture'  => 'es'
    ));

    $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array(
      'private_key' => sfConfig::get('app_recaptcha_private_key')
    ));
    
    unset(
      $this['isAprobado'],
      $this['captcha']
    );
  }
}