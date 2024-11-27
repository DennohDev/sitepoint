<?php

function printname(string $name= "null"){
    return $name;
}

$res = printname("Dennis");
$res2 = printname();

echo "$res2 <br>";

echo $res;