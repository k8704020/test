<?php
//-------------------------------------------------------
//函式: array_tostring()
//用途: 陣列轉文字
//日期: 2011年12月1日
//作者: jeff@max-life
//-------------------------------------------------------

    function array_tostring($arry,$dchr0='&',$dchr1='='){
    //---------------------------------------------------
    //陣列轉文字
    //---------------------------------------------------
    //$arry     陣列
    //$dchr0    元素串接字符,預設 &
    //$dchr1    元素鍵值串接字符,預設 =
    //---------------------------------------------------
        if(!isset($arry)||empty($arry)){
            return '';
        }

        $tmp=array();
        foreach($arry as $key=>$val){
            $tmp[]=$key.$dchr1.$val;
        }
        $tmp=implode($dchr0,$tmp);

        return $tmp;
    }
?>