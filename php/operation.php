<?php
class calc {
    public static function add($num1,$num2){
        $add=$num1+$num2;
        return $add;
    }
    public static function subtract($num1,$num2){
        $subtract=$num1-$num2;
        return $subtract;
    }
    public static function multiply($num1,$num2){
        $multiply=$num1*$num2;
        return $multiply;
    }
    public static function divide($num1,$num2){
        $divide=$num1/$num2;
        return $divide;
    }
}

class iva {
    public static function sreduced($num3){
        $sreduced=$num3*1.04;
        return $sreduced;
    }
    public static function sreducedout($num3){
        $sreducedout=$num3*0.04;
        return $sreducedout;
    }
    public static function reduced($num3){
        $reduced=$num3*1.10;
        return $reduced;
    }
    public static function reducedout($num3){
        $reducedout=$num3*0.10;
        return $reducedout;
    }
    public static function general($num3){
        $general=$num3*1.21;
        return $general;
    }
    public static function generalout($num3){
        $generalout=$num3*0.21;
        return $generalout;
    }
}