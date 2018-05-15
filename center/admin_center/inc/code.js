//-------------------------------------------------------
//inc
//-------------------------------------------------------
//root          根目錄
//xxx           xxx功能
//
//-------------------------------------------------------
//root
//-------------------------------------------------------
//root/_mouse_over      滑鼠移入
//
//-------------------------------------------------------
//xxx
//-------------------------------------------------------
//xxx/xxx()             xxx
//
//-------------------------------------------------------

    //---------------------------------------------------
    //root  根目錄
    //---------------------------------------------------

        //-----------------------------------------------
        //滑鼠移入
        //-----------------------------------------------

            function _mouse_over(obj){
            //-------------------------------------------
            //函式: _mouse_over()
            //用途: 滑鼠移入
            //-------------------------------------------
            //obj   參數物件
            //-------------------------------------------

                //參數檢驗
                if((obj===undefined)||(typeof(obj)!=='object')){
                    return false;
                }

                //設定
                obj.style.cursor='pointer';
            }
            