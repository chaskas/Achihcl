<?php

/**
 * Custom stuff!
 * By Federico Capoano
 * federico *at* nemesisdesign *dot* com
 */

class sfValidatedFileOriginalName extends sfValidatedFile
{

  /**
   * Return a proper, human understable file name.
   *
   * @return string A random name to represent the current file
   */
  public function generateFilename()
  {
    $filename = str_replace(" ", "_", strtolower($this->getOriginalName()));

    if(!file_exists("http://".$_SERVER['HTTP_HOST']."/uploads/docs/".$filename))
    {
      return $filename;
    }
    else
    {
      $extension = $this->getExtension($this->getOriginalExtension());
      $filename = str_replace($extension, '', $filename) . '_';

      $i = 2;

      while(true)
      {
        if(file_exists($this->getPath().$filename.$i.$extension))
        {
          $i++;
          continue;
        }
        break;
      }

      return $filename.$i.$extension;
    }
  }
}
