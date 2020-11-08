<?php
// 1 строки с пробелами
function strFilter($str) {
    if(ctype_space($str)) {
        return $str;
    } else {
        $newStr = ltrim($str);
        $pozition = mb_strpos($str, $newStr);

        while( strpos($newStr,"  ")!==false) {
            $newStr = str_replace("  ", " ", $newStr);
        }

        if($pozition) {
            return str_repeat(" ", $pozition).$newStr;
        } else {
            return $newStr;
        }
    }
}


// 2 Выводим слова с от 3-5 value
function filterStr($str){
     $arrStr =  explode( ' ', $str);
     $newArr = [];
    foreach($arrStr as $i) {
        if (strlen($i) >= 3 && strlen($i) <=5 ) {
            array_push($newArr,$i );

        }
    }
    echo  print_r($newArr);
}
//echo filterStr(' ');


//3 палидром

function palindrome($str){
    $newStr = str_replace(' ', "", $str);
    $reversNewStr = strrev($newStr);
    if($newStr ===  $reversNewStr){
        echo ' its palindrome';
    }
    else
        { echo 'false';}

}
//palindrome('121');


// 4 самое длинное слово
function longWord($str)
{
    $newArr = explode(' ', $str);
    $longWord = 0;
    foreach ($newArr as $index) {
        $lengthIndex = strlen($index);

        if (strlen($longWord) < $lengthIndex) {
            $longWord = $index;
        }
    }
    echo $longWord;
}

