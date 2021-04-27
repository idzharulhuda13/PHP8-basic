<?php

function funcMixed(mixed $param): mixed
{
    if (is_string($param)) {
        return 'String';
    } else if(is_int($param)) {
        return 1;
    } else if(is_array($param)){
        return [];
    }
}

var_dump(funcMixed('ini string'));
var_dump(funcMixed(19));
var_dump(funcMixed(['array1', 'array2']));