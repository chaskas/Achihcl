<?php

/**
 * BaseEmpresaColaboradora
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $nombre
 * @property text $logo
 * @property text $descripcion
 * @property text $url
 * 
 * @method text                getNombre()      Returns the current record's "nombre" value
 * @method text                getLogo()        Returns the current record's "logo" value
 * @method text                getDescripcion() Returns the current record's "descripcion" value
 * @method text                getUrl()         Returns the current record's "url" value
 * @method EmpresaColaboradora setNombre()      Sets the current record's "nombre" value
 * @method EmpresaColaboradora setLogo()        Sets the current record's "logo" value
 * @method EmpresaColaboradora setDescripcion() Sets the current record's "descripcion" value
 * @method EmpresaColaboradora setUrl()         Sets the current record's "url" value
 * 
 * @package    achihcl
 * @subpackage model
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpresaColaboradora extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa_colaboradora');
        $this->hasColumn('nombre', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('logo', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('descripcion', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('url', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}