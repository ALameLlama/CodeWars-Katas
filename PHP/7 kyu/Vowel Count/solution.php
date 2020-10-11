function getCount($str) {
  $vowelsCount = 0;
  
  $vowelArray = str_split($str);
  
  foreach ($vowelArray as $letter) {
  	if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
  		$vowelsCount = $vowelsCount + 1;
  	}
  }
  
  return $vowelsCount;
}