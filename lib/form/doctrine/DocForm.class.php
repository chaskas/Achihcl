<?php

/**
 * Doc form.
 *
 * @package    achihcl
 * @subpackage form
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DocForm extends BaseDocForm
{
  public function configure()
  {
    $this->widgetSchema['archivo'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Documento',
                'file_src' => '/uploads/docs/' . $this->getObject()->getArchivo(),
                'is_image' => false,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar',
                'template' => '<div align="center"><br/>%input%<br/></br>%delete% %delete_label%</div>',
            ));

    $this->validatorSchema['archivo'] = new sfValidatorFile(array(
                
                'path' => sfConfig::get('sf_upload_dir') . '/docs',
                'required' => false,
                'validated_file_class' => 'sfValidatedFileOriginalName'
            ));

    $this->validatorSchema['archivo_delete'] = new sfValidatorBoolean();
    
    $this->validatorSchema['nombre'] = new sfValidatorString();
    $this->validatorSchema['descripcion'] = new sfValidatorString(array('required' => false));
    
    unset(
      $this['created_at'],
      $this['updated_at']
    );
  }
}
