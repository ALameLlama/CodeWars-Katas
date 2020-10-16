function descendingOrder(int $n): int {
  $split = str_split($n);
  rsort($split);
  return implode('', $split);
}