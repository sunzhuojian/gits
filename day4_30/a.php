<?php
/**
 * Created by PhpStorm.
 * User: VULCAN
 * Date: 2019/4/30
 * Time: 8:41
 */
$n = 10;
$arr = add($n);
print_r($arr);
function add($n){
    $a = decbin($n);
    return $a;
}