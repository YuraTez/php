<?php
// Таблица умножения
$firstArr = [1,2,3,4,5,6,7,8,9,10];
$SecondArr = [1,2,3,4,5,6,7,8,9,10];
foreach($firstArr as $value){
foreach($SecondArr as $value_too){
$sum = $value * $value_too;
echo '<br>';
echo $value.'*'.$value_too.'='.$sum;
};
};
// конец таблица умножения


$product = [
['name' => 'phone', 'active'=>true, 'price'=>'100'],
['name' => 'book', 'active'=>false, 'price'=>'200'],
['name' => 'bed', 'active'=>true, 'price'=>'100'],
['name' => 'table', 'active'=>false, 'price'=>'250'],
['name' => 'T-shot', 'active'=>false, 'price'=>'350'],
['name' => 'shoes', 'active'=>true, 'price'=>'123']
];
foreach($product as $value){

if($value['active'] === true){
echo 'товар '.$value['name'].' есть в наличие цена '.$value['price'].'$'.'<br>';
}else {
echo 'товар '.$value['name'].' не в наличие приходи завтра '.'<br>';
}
};