<?php

    /*
        一、常量基本概念：
            - const / constant：是一種在程序運行當中，不可改變的量 (數據)。
            - 常量一旦定義，通常數據不可改變 (用戶級別)。

        二、常量名字的命名規則：
            1.定義常量時，不需要加上「$」符號，否則會被認為是變量。
            2.常量的名字組成是由字母、數字和下滑線處成，不能以數字開頭。
            3.常量的名字通常是以「大寫字母」為主，與變量以示區別。
            4.常量命名的規則比變量要松散，可以使用一些特殊字符，但特殊字
                符只能使用define()來定義。

            ※ 注意細節：
                1.define()和const定義的常量是有區別：在於訪問權限區別，後
                  續補充。
                2.定義常量通常不區分大小寫，但是可以區分，可以參照define()函
                  數的第三個參數，後補充。

        三、常量定義形式：
            - 在PHP中常量有兩種定義方式：
                1.define()：使用定義常量的函數。
                    - 特殊常量名僅能使用常量函數來定義，並且要使用constant()
                      ，不可直接使用。
                    - 語法：
                        define("常量名",常量值);
                    -例：
                        define("PI",3.14);
                        echo PI;  # 3.14

                        # 定義特殊常量名
                        define("-_-","smile");

                        echo constant("-_-");  # smile

                2.const：5.3版本之後才有的定義方式。
                    - 語法：
                        const 常量名 = 常量值;
                    - 例：
                        const PII = 3;
                        echo PII;   # 3

        四、常量的使用形式：
            - 常量的使用方式與變量一樣：常量不可改變值，在定義的時候就必須賦值。
            - 有時需要使用另一個形式來訪問(針對特殊名字的常量)，需要用到另一個
              訪問常量的函數：constant("常量名")。

        五、常量vs變量的使用：
            1.凡是數據可能會變化的，那麼肯定是使用變量。
            2.數據不一定會變化的，可以使用常量或變量，但通常使用變量居多。
            3.數據不允許被修改的，一定使用常量。

        六、系統常量：
            - 系統幫助用戶定義的常量，用戶可以直接使用。
            - 常用的幾個系統常量：
                1.PHP_VERSION：PHP版本號。
                2.PHP_INT_SIZE：整型的大小 (所占用的字節數)。
                3.PHP_INT_MAX：整型能表示的最大值，PHP中整型是允許出現正
                  負數，稱為「帶符號」(即有 +-)。
                - 例：
                    echo "<p>PHP_VERSION：",PHP_VERSION,"</p>",  # 7.4.4
                    "<p>PHP_INT_SIZE：",PHP_INT_SIZE,"</p>",     # 8
                    "<p>PHP_INT_MAX：",PHP_INT_MAX,"</p>";
                    # 9223372036854775807

            - 在PHP中還有一些特殊的常量，它們有雙下滑線開始+常量名+雙下滑線
              結束，這種常量稱之為系統魔術常量。
            - 魔術常量的值通常會跟著環境變化，但是用戶改變不了。
            - 意似 魔術常量存儲的值是不可被修改的，但是會自動隨著環境位置自
              動改變其值，比如：路徑、行數的不同，系統會自動改變存儲的值。
            - 比如以下幾種：
                1.__DIR__：當前被執行的腳本所在電腦的絕對路徑。
                2.__FILE__：當前被執行的腳本所在電腦的絕對路徑(帶檔案名)。
                3.__LINE__：當前所屬的行數。
                4.__NAMESPACE__：當前所屬的命名空間。
                5.__CLASS__：當前所屬的類。
                6.__METHOD__：當前所屬的方法。
                - 例：
                    echo "<p>__DIR__：",__DIR__,"</p>",  # E:\XAMPP\htdocs\php
                    "<p>__FILE__：",__FILE__,"</p>",     # E:\XAMPP\htdocs\php\5.const.php
                    "<p>__LINE__1：",__LINE__,"</p>",    # 104
                    "<p>__LINE__2：",__LINE__,"</p>";    # 105
    */

    // 常量函數：
    define("PI",3.14);
    echo PI;  # 3.14

    echo "<br /><br />";
    // 聲明常量
    const PII = 3;
    echo PII;  # 3

    echo "<br /><br />";
    # 特殊常量名：define() 搭配 constant() 來使用。
    define("-_-","smile");

    // const -_- = 123;  # 報錯，特殊常量名只能使用「define()」來定義。

    echo constant("-_-");
    // echo -_-;  # 報錯，特殊常量名，不可直接用。

    echo "<hr />";
    // 系統常量：
    echo "<p>PHP_VERSION：",PHP_VERSION,"</p>",  # 7.4.4
    "<p>PHP_INT_SIZE：",PHP_INT_SIZE,"</p>",     # 8
    "<p>PHP_INT_MAX：",PHP_INT_MAX,"</p>";       # 9223372036854775807

    echo "<hr />";
    // 系統常量：魔術常量
    echo "<p>__DIR__：",__DIR__,"</p>",  # E:\XAMPP\htdocs\php
    "<p>__FILE__：",__FILE__,"</p>",     # E:\XAMPP\htdocs\php\5.const.php
    "<p>__LINE__1：",__LINE__,"</p>",    # 104
    "<p>__LINE__2：",__LINE__,"</p>";    # 105