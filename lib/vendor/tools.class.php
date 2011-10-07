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
  public static function byteFormat($bytes, $unit = "", $decimals = 2) {
	$units = array('B' => 0, 'KB' => 1, 'MB' => 2, 'GB' => 3, 'TB' => 4, 
			'PB' => 5, 'EB' => 6, 'ZB' => 7, 'YB' => 8);
 
	$value = 0;
	if ($bytes > 0) {
		// Generate automatic prefix by bytes 
		// If wrong prefix given
		if (!array_key_exists($unit, $units)) {
			$pow = floor(log($bytes)/log(1024));
			$unit = array_search($pow, $units);
		}
 
		// Calculate byte value by prefix
		$value = ($bytes/pow(1024,floor($units[$unit])));
	}
 
	// If decimals is not numeric or decimals is less than 0 
	// then set default value
	if (!is_numeric($decimals) || $decimals < 0) {
		$decimals = 2;
	}
 
	// Format output
	return sprintf('%.' . $decimals . 'f '.$unit, $value);
  }
}
