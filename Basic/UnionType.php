<?php

// class Word{
//     public float|string $data;
// }

// $get_word = new Word();
// echo $get_word->data = 'string';
// echo $get_word->data = 9.2;

// function funcTest(float|string|int $data){
//     if (is_int($data)) {
//         echo 'ini adalah integer';
//     } else if(is_float($data)) {
//         echo ' ini adalah float';
//     } else if(is_string($data)) {
//         echo 'ini adalah string';
//     } else {
//         echo 'tipe data tidak dikenal';
//     }   
// }

// return funcTest('ini adalh string');

function funcTest(float|string|int $data): float|string|int
{
    if (is_int($data)) {
        echo 10;
    } else if(is_float($data)) {
        echo 1.5;
    } else if(is_string($data)) {
        echo 'ini adalah string';
    }
}

var_dump(funcTest(9.9));
var_dump(funcTest('string'));
var_dump(funcTest(10));
