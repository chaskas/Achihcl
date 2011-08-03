<?php

/**
 * BaseSubcomision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $nombre
 * @property longtext $descripcion
 * @property integer $comision_id
 * @property Comision $Comision
 * @property Doctrine_Collection $Foros
 * 
 * @method text                getNombre()      Returns the current record's "nombre" value
 * @method longtext            getDescripcion() Returns the current record's "descripcion" value
 * @method integer             getComisionId()  Returns the current record's "comision_id" value
 * @method Comision            getComision()    Returns the current record's "Comision" value
 * @method Doctrine_Collection getForos()       Returns the current record's "Foros" collection
 * @method Subcomision         setNombre()      Sets the current record's "nombre" value
 * @method Subcomision         setDescripcion() Sets the current record's "descripcion" value
 * @method Subcomision         setComisionId()  Sets the current record's "comision_id" value
 * @method Subcomision         setComision()    Sets the current record's "Comision" value
 * @method Subcomision         setForos()       Sets the current record's "Foros" collection
 * 
 * @package    achihcl
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSubcomision extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('subcomision');
        $this->hasColumn('nombre', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('descripcion', 'longtext', null, array(
             'type' => 'longtext',
             'notnull' => true,
             ));
        $this->hasColumn('comision_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Comision', array(
             'local' => 'comision_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Foro as Foros', array(
             'local' => 'id',
             'foreign' => 'subcomision_id'));
    }
}