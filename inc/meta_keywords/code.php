<?php
//-------------------------------------------------------
//函式: meta_keywords()
//用途: 頁面關鍵字設定
//日期: 2013年8月12日
//作者: mssr_team@cl_ncu
//-------------------------------------------------------

    //---------------------------------------------------
    //測試
    //---------------------------------------------------
    //meta_keywords($key='mssr');

    function meta_keywords($key=''){
    //---------------------------------------------------
    //函式: meta_keywords()
    //用途: 頁面關鍵字設定
    //---------------------------------------------------
    //$key  項目名稱
    //---------------------------------------------------

        //-----------------------------------------------
        //檢驗參數
        //-----------------------------------------------

            if(!isset($key)||trim($key)===''){
                $key='';
            }else{
                $key=strtolower($key);
            }

        //-----------------------------------------------
        //選單項目      中文名稱
        //-----------------------------------------------
        //mssr          明日閱讀

            $arrys=array(
                "mssr"=>array(
                    "name"  =>"mssr",
                    "cname" =>"明日閱讀",
                    "items" =>array(
                        '明日閱讀關鍵字'
                    )
                )
            );

        //-----------------------------------------------
        //處理
        //-----------------------------------------------

            $arry=array();
            if(isset($arrys[$key])&&!empty($arrys[$key])){
                $arry =$arrys[$key];
                $name =$arry['name'];
                $cname=$arry['cname'];
                $items=$arry['items'];
                $items=array_map('trim',$items);

                $nl="\r\n";
                $content=implode('',$items);
                //echo "<meta name='keywords' content='{$content}' />{$nl}";
            }
    }
?>