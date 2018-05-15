<?php
//-------------------------------------------------------
//函式: to_bytes()
//用途: 其他單位轉bytes
//日期: 2011年12月12日
//作者: jeff@max-life
//-------------------------------------------------------

    function to_bytes($val,$unit){
    //---------------------------------------------------
    //其他單位轉bytes
    //---------------------------------------------------
    //$val   值(bytes)
    //$unit  單位 {'bytes'|'kb'|'mb'|'gb'|'tb'}
    //---------------------------------------------------

        if(!isset($val)||(trim($val)=='')||!is_numeric($val)){
            return false;
        }
        if(!isset($unit)||(trim($unit)=='')){
            return false;
        }

        $size=1024;
        $arry_unit=array('bytes','kb','mb','gb','tb');

        if(!in_array(strtolower($unit),$arry_unit)){
            return false;            
        }

        switch(strtolower($unit)){
            case 'bytes':
                $val=$val*pow($size,0);
                $val=sprintf("%.2f",round($val,2));
                break;
            case 'kb':
                $val=$val*pow($size,1);
                $val=sprintf("%.2f",round($val,2));
                break;
            case 'mb':
                $val=$val*pow($size,2);
                $val=sprintf("%.2f",round($val,2));
                break;
            case 'gb':
                $val=$val*pow($size,3);
                $val=sprintf("%.2f",round($val,2));
                break;
            case 'tb':
                $val=$val*pow($size,4);
                $val=sprintf("%.2f",round($val,2));
                break;
        }

        //回傳
        return $val;
    }
?>