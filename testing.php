<?php

$number = 10;
$total_sum = 0;

for ($i = 1; $i < $number; $i++){
    if ($i % 3 == 0 || $i % 5 == 0){
        $total_sum = $total_sum + $i;
        }
    }
echo $total_sum;
