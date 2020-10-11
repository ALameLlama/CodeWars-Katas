function solution($number){
  
  for ($i = 1; $i < $number; $i++){
    if ($i % 3 == 0 || $i % 5 == 0){
        $total_sum = $total_sum + $i;
        }
    }
  return $total_sum;
}