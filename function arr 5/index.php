<?php


$arr = [15, 18, 44, 65, 92, 27, 45, 36, 38, 55, 2, 89, 19];
echo array_shift($arr), '<br>';
array_unshift($arr, 1,2,18,65, 8, 3);
echo array_shift($arr), '<br>';
echo print_r($arr), '<br>';
sort($arr);
echo print_r($arr), '<br>';
echo print_r($arr), '<br>';
echo count($arr), '<br>';
echo rsort($arr),'<br>'; 