<?php
date_default_timezone_set('Europe/Moscow');
$timeStart = microtime(true);

$x=$_POST["X"];
$y =$_POST["Y"];
$r=$_POST["R"];

$responseArray=array();
$responseArray["x"]=$x;
$responseArray["y"]=$y;
$responseArray["r"]=$r;
$responseArray["result"]= validate($x,$y,$r,$responseArray);
if($responseArray["result"] !== "Validation fail")
    $responseArray["result"]= isInArea($x,$y,$r);
header("Content-Type:application/json");
$responseArray["currentTime"]= date("H:i:s");
$responseArray["executionTime"]= round(((microtime(true)- $timeStart)*1000),10)."ms";
echo  json_encode($responseArray);

function validate($x,$y,$r){
    $xValues = array("-2","-1.5","-1",'-0.5',"0","0.5","1","1.5","2");
    $rValues = array("1","2","3","4","5");
    if(is_numeric($x) && is_numeric($y) && is_numeric($r) && in_array($x,$xValues)
        && in_array($r,$rValues) && $y>=-5 && $y<=3){
        return "Validation success";
    }
    return "Validation fail";
}

function isInArea($x,$y,$r){
    if ($x<=0 && $y>=0){
        if ($y<=($x+$r/5))
            return "Success";
        else
            return "Fail";
    }elseif ($x>=0 &&  $y<=0){
        if($x<=$r && $y>=$r/2)
            return "Success";
        else
            return "Fail";
    }elseif ($x<=0 && $y<=0){
        if ($x^2+$y^2<=$r)
            return "Success";
        else
            return "Fail";
    }
    else
        return "Fail";

}