function accum($s) {
    $result = '';

  for ($i = 0; $i < strlen($s); $i++) {
      $letter['n'] = $i;
      $letter['s'] = substr($s, $i, 1);
      
      for ($z = 0; $z < $letter['n']; $z++) {
          $letter['s'] .= substr($s, $i, 1);    
      }
      $lr[$i] = array_map('strtolower' , $letter);
      $lu[$i] = array_map('ucfirst' , $lr[$i]);
  }
  
  foreach ($lu as $a) {
      $result .= $a['s'];
      $result .= '-';
  }
  
  return substr($result, 0, -1);
}