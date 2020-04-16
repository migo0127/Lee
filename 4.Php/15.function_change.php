<?php
/*
    可變函數：
        - 當前有一個變量所保存的值，剛好是一個函數的名字，那麼就可以使用變量+()來
          充當函數名調用。
        - 語法：
            $變量 = "diaplay";

            function display(){
                // 函數體
            }

            // 可變函數
            $變量名();

        - 可變函數在系統使用的過程中還是比較多的，尤期是使用很多系統函數的時候，
          需要用戶在外部定義一個自定義函數，但是是需要傳入到系統函數內部使用。

        - 例：
            function sys_function($a,$b){
                $b = $b + 10;

                return $a($b);  # user_function($b);
            }

            // 定義一個用戶函數，求一個數的四次方
            function user_function($num){           # 回調函數
                return $num * $num * $num * $num;
            }

            // 求10的4次方
            echo sys_function("user_function",10);   # 160000

        ※ 將一個用戶定義的函數(函數名)傳入給另一個函數去使用的過程，稱為「回調過程」
          ，而被傳入的函數稱之為「回調函數」。

*/
// 可變函數：回調過程 → 回調函數
# 定義系統函數(假設)
function sys_function($a,$b){  # 回調函數
    $b = $b + 10;

    return $a($b);  # user_function($b); 回調過程
}

// 定義一個用戶函數，求一個數的四次方
function user_function($num){
    return $num * $num * $num * $num;
}

// 求10的4次方
echo sys_function("user_function",10);   # 160000