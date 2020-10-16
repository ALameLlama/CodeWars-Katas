function XO($s) {
  $stringParts = str_split($s);

  $count = array_count_values(array_map('strtoupper', $stringParts));
  
  if ($count['O'] == $count['X']) {
      return true;
  }
  
  return false;
}