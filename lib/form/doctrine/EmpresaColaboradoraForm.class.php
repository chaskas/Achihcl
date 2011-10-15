<?php

/**
 * EmpresaColaboradora form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EmpresaColaboradoraForm extends BaseEmpresaColaboradoraForm
{
  public function configure()
  {
    
    $this->validatorSchema['nombre'] = new sfValidatorString();
    
    $this->validatorSchema['descripcion'] = new sfValidatorString(array('required'=>false));
    
    $this->validatorSchema['url'] = new sfValidatorURL();
    
    $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Logo',
                'file_src' => '/uploads/empresas/s_' . $this->getObject()->getLogo(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar',
                'template' => '%input%<br/><br/>%file%<br/><br/>%delete% %delete_label%',
            ));

    $this->validatorSchema['logo'] = new sfValidatorFile(array(
                'path' => sfConfig::get('sf_upload_dir') . '/empresas',
                'required' => false,
                'mime_types' => 'web_images',
                'validated_file_class' => 'sfResizedFileLogo'
            ));

    $this->validatorSchema['logo_delete'] = new sfValidatorBoolean();
    
  }
}
