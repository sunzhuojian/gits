<?php
/**
 * Created by PhpStorm.
 * User: VULCAN
 * Date: 2019/4/16
 * Time: 8:41
 */
$shu = $_POST['shu'];
$arr = str_split($shu);


//$arr = [1,2,3,4,5,6];
//var_dump($arr);
foreach ($arr as $k=>$v){
    if($v%2!=0){
        $arr2 = $v;
        echo  $arr2;
    }
}
foreach ($arr as $k=>$v){
    if($v%2==0){
        $arr3 = $v;
        echo $arr3;
    }
}
