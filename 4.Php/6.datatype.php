<?php

    /*
        一、PHP的數據類型：
            - 在PHP中指的是存儲的數據本身的類型，而不是變量的類型！！
            - PHP是一種弱類型語言，變量本身沒有數據類型。
            - 意似，一個箱子(變量)被限制只能存放蘋果(數據)，或者箱子(變量)可以放
              蘋果、橘子、葡萄等等，就表示該箱子(變量)沒有限制存儲的類型。
              → 所以箱子本身沒有類型之分，而是存放的東西類型限制了箱子。

            - 在PHP中將數據分為三大類八小類。
                (一).三大類及其下的八小類：
                    1.簡單(基本)數據類型：有4個小類。
                    2.複合數據類型：有2個小類。
                    3.特殊數據類型：有2個小類。

                (二).三大類八小類說明：
                    1.簡單(基本)數據類型：
                        1-1.整型：int / integer
                            - 系統分配 4 個字節存儲，表示整數類型，但有前題，若
                            存儲的下為整數類型，若存儲不下則為浮點數類型。
                        1-2.浮點型：float / double
                            - 系統分配 8 個字節存儲，表示小數或者整型存不下的整數。
                        1-3.字符串型：string
                            - 系統根據實際長度分配，基本透過引號("")表示字符串。
                        1-4.布爾值：bool / boolean
                            - 表示布爾類型，只有兩個值：true 和 false。

                    2.複和數據類型：
                        2-1.物件類型：object
                            - 存放物件 (面向物件，後補充)。
                        2-2.陣列類型：array
                            - (一次性) 存儲多個數據。

                    3.特殊數據類型：
                        3-1.資源類型：resource
                            - 存放資源數據，多指PHP的外部數據，如：資料庫、文件...
                            等外部數據。
                        3-2.空類型：NULL
                            - 只有一個值就是NULL，任何值與NULL運算都是NULL，所以可
                            以說 NULL 不能運算，沒有意義。

        二、類型轉換：
            - 在很多條件下，需要指定的數據類型，需要將外部數據(當前PHP取的的數據)轉換
              成目標數據類型。
            - 在PHP中有兩種類型轉換方式：
                1.(系統)自動轉換：系統根據需求自行判定，自行轉換(用的比較多，效率偏低)。
                2.強制(手動)轉換：人為根據需要的目標類型來轉換。
                    - 強制轉換規則：在變量之前增家一個(要轉換的對應類型)，如 int...
                      等，其中「NULL類型」需要搭配 unset() 來轉換。

            - 在轉換的過程中，用的比較多的就是轉布爾類型(判斷用)和轉數值類型(算術運算)。
                1.其他類型 → 布爾類型：

                    ※ 可參考圖片說明：
                        E:\XAMPP\htdocs\php\img\06\其他數據類型轉布爾值.jpg

                    - true 或者 false，在PHP中比較少類型會轉換成false。
                    - 基本除了「""」、0、null、is undefined 會轉為false，
                      其餘都是true，與JS相似。

                2.其他類型 → 數值類型：
                    1.布爾值 true 為 1，false 為 0。
                    2.字符串轉數值：
                        2-1.以「字母」開頭的字符串，永遠為 0。
                        2-2.以「數字」開頭的字符串，取到碰到字符串為止(不會同時包含
                            兩個小數點)。
                        - 例：
                            $a = "abc1.1.1";
                            $b = "1.1.1abc";

                             // 系統自動轉換：算術+運算，系統先轉換成數值類型(整數和浮點數)，然後運算。
                            echo $a + $b;  # 0 + 1.1 = 1.1
                            # $a = 0
                            # $b = 1.1

                            // 強制轉換
                            echo (float)$a,"、",(float)$b; # 0、1.1
                            # (float)$a = 0
                            # (float)$b = 1.1

                            echo (float)$a+(float)$b;
                            # 0 + 1.1 = 1.1

        三、類型判斷：
            - 通過一組(類型判斷函數)來判斷變量的類型，最終返回這個變量所本存的數據的
              數據類型，可以使用一組以 is_類性名稱的函數 來進行。
            - 語法：
                is_int(變量名);
                is_float(變量名);
                is_XXX(變量名);

            - 注意：bool類型不能用echo來查看，需要使用 var_dump()結構來查看。
                - 語法：
                    var_dump(變量1,變量2,...);
            - 例：
                $a = "abc1.1.1";
                $b = "1.1.1abc";

                var_dump(is_int($a));  # bool(false)
                echo "<br /><br />";
                var_dump(is_string($b)); # bool(true)
                echo "<br /><br />";

            - 還有一組函數可以用來獲取以及設定數據(變量)的類型：
                1.Gettype()：獲取類型，得到的是該類型對應的字符串。
                    - 語法：
                        Gettype(變量名);
                2.Settype()：設定數據類型，與強制轉換不同！！
                    - 強制轉換「(類型)變量名」：是對數據值的複製內容進行處理，不會處理
                      實際存儲的內容，即本身類型不會改變。
                    - settype()：會直接改變數據本身。
                    - 語法：
                        settype(變量名,"類型");
                    - 例：
                        echo $a; # abc1.1.1
                        echo "<br /><br />";
                        echo gettype($a);  # srting
                        echo "<br /><br />";
                        var_dump(settype($a,"int")); # bool(true)
                        echo "<br /><br />";
                        var_dump(is_string($a)); # bool(false)
                        echo "<br /><br />";
                        echo $a; # 0
                        echo "<br /><br />";
                        var_dump($a);  # int(0)


                        echo "<hr />";
                        echo $b;  # 1.1.1abc
                        echo "<br /><br />";
                        echo gettype($b);  # srting
                        echo "<br /><br />";
                        settype($b,"int"); # 設定類型為 int
                        echo $b;  # 1
                        echo "<br /><br />";
                        var_dump(is_int($b)); # bool(true)
                        echo "<br /><br />";
                        echo gettype($b); # integer
                        echo "<br /><br />";
                        var_dump($b); # int(1)
    */
    // 創建數據
    $a = "abc1.1.1";
    $b = "1.1.1abc";

    // 系統自動轉換：算術+運算，系統先轉換成數值類型(整數和浮點數)，然後運算。
    echo $a + $b;  # 1.1
    # $a = 0
    # $b = 1.1


    echo "<br /><br />";
    // 強制轉換
    echo (float)$a,"、",(float)$b; # 0、1.1
    # (float)$a = 0
    # (float)$b = 1.1
    echo "<br /><br />";
    echo (float)$a+(float)$b;  # 0 + 1.1 = 1.1

    echo "<hr />";
    // 判斷數據類型：
    var_dump(is_int($a));  # bool(false)
    echo "<br /><br />";
    var_dump($a);  # string(8) "abc1.1.1"
    echo "<br /><br />";
    var_dump(is_string($b)); # bool(true)
    echo "<br /><br />";

    echo "<hr />";
    // 獲取類型及設定類型：
    echo $a; # abc1.1.1
    echo "<br /><br />";
    echo gettype($a);  # srting
    echo "<br /><br />";
    var_dump(settype($a,"int")); # bool(true)
    echo "<br /><br />";
    var_dump(is_string($a)); # bool(false)
    echo "<br /><br />";
    echo $a; # 0
    echo "<br /><br />";
    var_dump($a);  # int(0)

    echo "<hr />";
    echo $b;  # 1.1.1abc
    echo "<br /><br />";
    echo gettype($b);  # srting
    echo "<br /><br />";
    settype($b,"int"); # 設定類型為 int
    echo $b;  # 1
    echo "<br /><br />";
    var_dump(is_int($b)); # bool(true)
    echo "<br /><br />";
    echo gettype($b); # integer
    echo "<br /><br />";
    var_dump($b); # int(1)



