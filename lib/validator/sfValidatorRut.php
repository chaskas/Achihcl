<?php

class sfValidatorRut extends sfValidatorBase
{
 
  protected function configure($options = array(), $messages = array())
  {
    $this->setMessage('invalid', 'El rut ingresado es inválido');
    $this->addMessage('max_length', '"%value%" is too long (%max_length% characters max).');
    $this->addMessage('min_length', '"%value%" is too short (%min_length% characters min).');
 
    $this->addOption('max_length');
  }
 
  protected function doClean($values)
  {
    $r = strtoupper(str_replace(array(".", "-"), "", $values));
    $sub_rut = substr($r, 0, strlen($r) - 1);
    $sub_dv = substr($r,  - 1);
    $x = 2;
    $s = 0;
    for ($i = strlen($sub_rut) - 1;$i >= 0;$i--)
    {
      if ($x > 7)
      {
        $x = 2;
      }
      $s += $sub_rut[$i] * $x;
      $x++;
    }
    $dv = 11 - ($s % 11);
    if ($dv == 10)
    {
      $dv = 'K';
    }
    if ($dv == 11)
    {
      $dv = '0';
    }
    if ($dv == $sub_dv)
    {
      //return $values;
 
   $clean = (string) $values;
 
    $length = function_exists('mb_strlen') ? mb_strlen($clean, $this->getCharset()) : strlen($clean);
 
    if ($this->hasOption('max_length') && $length > $this->getOption('max_length'))
    {
      throw new sfValidatorError($this, 'max_length', array('value' => $values, 'max_length' => $this->getOption('max_length')));
    }
 
  return $clean;
    }
    else
    {
      throw new sfValidatorError($this, 'invalid', array('values' => $values));
    }
  }
}