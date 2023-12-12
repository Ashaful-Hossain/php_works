<?php
function add($a,$b) {
    $m=$a+$b;
    return $m;
}

function sub($a,$b) {
    $n = $a-$b;
    return $n;
}

function getData($file_url,$delimeter) {
    $con = fopen($file_url,"r");
    $data = fread($con,99000);
    $d =explode($delimeter,$data);
    return $d;
}