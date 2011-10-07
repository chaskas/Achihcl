<?php

/**
 * BaseLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $titulo
 * @property text $descripcion
 * @property text $link
 * 
 * @method text getTitulo()      Returns the current record's "titulo" value
 * @method text getDescripcion() Returns the current record's "descripcion" value
 * @method text getLink()        Returns the current record's "link" value
 * @method Link setTitulo()      Sets the current record's "titulo" value
 * @method Link setDescripcion() Sets the current record's "descripcion" value
 * @method Link setLink()        Sets the current record's "link" value
 * 
 * @package    achihcl
 * @subpackage model
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('link');
        $this->hasColumn('titulo', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('descripcion', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('link', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}