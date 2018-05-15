<?php
//-------------------------------------------------------
//函式: get_datesid()
//用途: 日期時間識別碼
//日期: 2011年12月10日
//作者: jeff@max-life
//-------------------------------------------------------

    function get_datesid($now=true){
    //---------------------------------------------------
    //日期時間識別碼
    //---------------------------------------------------
    //$now  是否要以現在時間為主,預設true
    //---------------------------------------------------
        if($now===true){
            return date("YmdHis",time());
        }else{
            $arry=array();
            for($i=-100;$i<=100;$i++){
                $arry[]=date("YmdHis",time()+$i);
            }
            shuffle($arry);

            $pos=mt_rand(0,count($arry)-1);
            return $arry[$pos];            
        }
    }
?>