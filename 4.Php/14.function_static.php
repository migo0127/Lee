<?php

/*
    靜態變量：
        - static，是在「函數內部」定義的變量，使用static關鍵字修飾，用來實現跨函數
          共享數據的變量(指的是同一個函數內多次被調用)，因為每當函數運行結束時，所
          有局部變量都會清空，如果重新運行下一個函數，所以的局部變量又會重新初始化
          ，但靜態變量不會。

        - 語法：
            function display(){
                // 定義局部變量
                $local = 1;

                // 定義靜態變量
                static $count = 1;

                echo $local++,"、",$count++,"<br />";
            }

            // 調用多次
            display();  # 1、1
            display();  # 1、2
            display();  # 1、3

        ※ 靜態變量的執行流程：
            1.系統在進行編譯的時間就會對static這一行進行初始化，為靜態變量賦值。
              → $count = 1。
            2.函數在調用的時間，會自動跳過static關鍵字這一行。
              → 調用時，不會運行 static $count = 1;
            3.所以靜態變量會從已賦值的 1 開始自增 $count++。

        - 靜態變量的使用：
            1.為了統計：當前函數被調用的次數。
            2.為了統籌函數多次調用得到的不同結果(遞歸思想，後補充)。
*/

// 靜態變量
function display(){
    // 定義局部變量
    $local = 1;

    // 定義靜態變量
    static $count = 1;

    echo $local++,"、",$count++,"<br />";
}

// 調用多次
display();  # 1、1
display();  # 1、2
display();  # 1、3