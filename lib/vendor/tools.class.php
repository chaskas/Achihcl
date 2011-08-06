<?php
 
class tools
{
  public static function delExtraSpaces($str)
  {
    $str = trim($str);     
    $ret_str ="";
    for($i=0;$i < strlen($str);$i++) {
      if(substr($str, $i, 1) != " ") {
        $ret_str .= trim(substr($str, $i, 1));
      } else {
        while(substr($str,$i,1) == " "){
          $i++;
        }   
        $ret_str.= " ";
        $i--;
      }
    }
    return $ret_str;
  }
  public static function getResume($str)
  {
    return substr(tools::delExtraSpaces($str),0,400)."...";
  }
  public static function getResumeSideBar($str)
  {
    return substr(tools::delExtraSpaces($str),0,300)."...";
  }
  public static function getResumeShort($str)
  {
    return substr(tools::delExtraSpaces($str),0,30)."...";
  }
  public static function formatDate($str)
  {
    $date = date_create($str);
    return date_format($date, 'd/m/Y');
  }
}
