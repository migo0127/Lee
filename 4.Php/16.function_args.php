<?php

/*
    有關函數的函數：
        1.function_exists()：
            判斷指定的函數名字是否在內存中存在，幫助用戶不取使用一個不存在的
            函數，讓代碼安全性更高。

        2.func_get_arg()：
            在自定義函數中去獲取指定數值對應的實數。

        3.func_get_args()：
            在自定義函數中去獲取所有的實數(返回數組)。

        4.func_num_args()：
            獲取當前自定義函數的實參數量。

            - 例：
            function test($a,$b){  # 只定義兩個形參

                # 獲取指定實數
                var_dump(func_get_arg(0));
                # int(1) → 實數的標識是從 0 開始！！
                var_dump(func_get_arg(1));
                # string(1) "2"
                var_dump(func_get_arg(2));
                # int(3)

                # 獲取所有實參
                var_dump(func_get_args());
                #
                array(4) {
                    [0]=>
                    int(1)
                    [1]=>
                    string(1) "2"
                    [2]=>
                    int(3)
                    [3]=>
                    int(4)
                }
                #

                # 獲取當前函數的實參數量
                var_dump(func_num_args());  # int(4)

                # ※ func_get_arg(0)、func_get_args()、func_num_args()：
                #    都是統計對應實參的數量！

            }

            // 調用函數
            function_exists("test") && test(1,"2",3,4);
            # 實數的標識是從 0 開始！！

*/
// 函數的函數：
# 自定義一個函數
echo "<pre>";

function test($a,$b){  # 只定義兩個形參

    # 獲取指定實數
    var_dump(func_get_arg(0));
    # int(1) → 實數的標識是從 0 開始！！
    var_dump(func_get_arg(1));
    # string(1) "2"
    var_dump(func_get_arg(2));
    # int(3)

    # 獲取所有實參
    var_dump(func_get_args());
    /*
    array(4) {
        [0]=>
        int(1)
        [1]=>
        string(1) "2"
        [2]=>
        int(3)
        [3]=>
        int(4)
    }
    */

    # 獲取當前函數的實參數量
    var_dump(func_num_args());  # int(4)

    # ※ func_get_arg(0)、func_get_args()、func_num_args()：
    #    都是統計對應實參的數量！

}

// 調用函數
function_exists("test") && test(1,"2",3,4); # → 實數的標識是從 0 開始！！