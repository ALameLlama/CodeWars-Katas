function getMiddle($text) {
  
  $length = strlen($text);
  
  if ($length % 2 == 0) {
      return substr($text, $length / 2.5, 2);
  } 
  
  if ($length % 2 != 0) {
      return substr($text, $length / 2, 1);
  }
  
}