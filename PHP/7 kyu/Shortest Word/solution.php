function findShort($str){
  $arr = explode(' ', $str);

  $lengths = array_map('strlen', $arr);
  
  return min($lengths);
}