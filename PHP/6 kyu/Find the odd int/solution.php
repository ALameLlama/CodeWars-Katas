function findIt(array $seq) : int
{
  $arr = array_count_values($seq);
  
  foreach ($arr as $key => $val)
      if ($val % 2 != 0) {
          return $key;
  }
}