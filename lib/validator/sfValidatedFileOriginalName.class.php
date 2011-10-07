<?php

class sfValidatedFileOriginalName extends sfValidatedFile
{
  /**
   * Creates a filename based on the original filename, whilst checking if it already exists and incrementing.
   *
   * @return string A random name to represent the current file
   */
  public function generateFilename()
  {
    // get the extension
    $ext = $this->getExtension($this->getOriginalExtension());

    // strip out extension and invalid characters
    $name = str_replace($ext, '', $this->getOriginalName());

    // replace all non letters or digits by -
    $name = preg_replace('/\W+/', '-', $name );

    // trim and lowercase
    $name = strtolower(trim($name , '-'));

    $new_name = $name;
    $i = 1;
    // ensure file does not already exist, if it does, increment
    while(file_exists($this->path.DIRECTORY_SEPARATOR.$new_name.$ext))
    {
      $new_name = $name.'-'.$i;
      $i++;
    }

    return $new_name.$ext;
  }
}
