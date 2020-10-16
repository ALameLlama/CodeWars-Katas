function opposite($n) {
  if (substr($n, 0, 1) == '-') {
    return substr($n, 1);
  } else {
    return $n = '-' . $n;
  }
}