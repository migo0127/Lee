<?php

    /*
        簡單基本數據類型：
            整數類型、浮點類型、布爾類型。

            一、整數類型：
                - 保存整數數值(有範為限制)，4個字節存儲數據，最大就是32位 (42億多)，
                  但是在PHP中默認整數是有符號類型(區分正負數，所以正21億、負21億)。
                -在PHP中提供了四種整型的定義方式：
                    1.十進制：
                        - 逢 10 進 1，能夠出現的數字是 0-9。
                        - 例：
                            $a = 110;
                    2.二進制：0b~~
                        - 逢 2 進 1，能夠出現的數字是 0-1。
                        - 例：
                            $b = 0b110;
                    3.八進制：0~~~
                        - 逢 8 進 1，能夠出現的數字是 0-7。
                        - 例：
                            $c = 0110;
                    4.十六進制：0x~~
                        - 逢 16 進 1，能夠出現的數字是 0-9 以及 A-F，A表示10，F表示15。
                        - 例：
                            $d = 0x110;
                - PHP 默認輸出數值時都會自動轉換為 十進制 來輸出。
                - 進制轉換：
                    - 手動轉換：
                        1.十進制轉二進制：
                            (1).除2倒取餘數法，不管得到的結果如果，需補足32位。
                            (2).取出最大的2的N次方，直到結果為 0。
                            - 例：
                                10 --> 8+2 --> 2^3 + 2^1
                                從二進制右側開始，按照對應的次方位置補1，沒有則 0。
                                ==> 00000000 00000000 00000000 00001010

                        2.二進制轉十進制：
                            - 例：
                                01101011 --> 從右側開始
                                1*2^0 + 1*2^1 + 0*2^2 + 1*2^3 + 0*2^4 + 1*2^5 + 1*2^6 + 0*2^7

                                ==> 1 + 2 + 0 + 8 + 0 + 32 + 64 + 0 = 107
                    - 進制函數：
                        - PHP中不需要用戶這麼複雜的去計算，提供了很多的函數進行轉換。
                            1.decbin()：十進制轉二進制。
                            2.decoct()：十進制轉八進制。
                            3.dechex()：十進制轉十六進制。
                            4.bindec()：二進制轉十進制。
                            ....

    */
    // 整數的四種定義：
    $a = 110;  # 110
    $b = 0B110; # 6
    $c = 0110;  #72
    $d = 0x110; # 272

    echo $a,"、",$b,"、",$c,"、",$d;

    echo "<br / ><br />";
    // 進制函數
    echo (decbin(107));  # 1101011
    echo "<br / ><br />";
    var_dump(decbin(107)); # string(7) "1101011"

    /*
        二、浮點類型：
            - 小數類型以及超過整型所能存廚範圍的整數(不保證精確度)，精確度範圍大
              概在15個有效數字左右。
            - 浮點型定義有兩種方式：
                1.$f1 = 1.23;
                    echo $f1;  # 1.23
                2.$f2 = 1.23e10;  # 科學計數法，其中e表示底10。
                    var_dump($f2);  # float(12300000000)

                  $f3 = PHP_INT_MAX + 1;
                    var_dump($f3);  # float(9.2233720368548E+18)
            - 簡單說明浮點數為什麼同樣的字節數存儲數據，但是卻能表示更大的數據呢？
                整型最大值：所有位都是有效數據，[]為正負符號，0表正，1表負。
                    00000000 0000000 0000000 0000000 → [1]111111 11111111 11111111 11111111

                浮點數：[]7為算的結果是10的指數，後面三個字節存儲的為具體數值
                    00000000 0000000 0000000 0000000 → 1[111111] 11111111 11111111 11111111

            - 盡量不要用浮點數做精確判斷：浮點數保存的數據不夠精確，而且在記算機中凡
              是小數基本上存的都不精確。
                - 例：
                    $f4 = 0.7;
                    $f5 = 2.1;
                    $f6 = $f5 / 3 ;

                    var_dump($f6);  # float(0.7)
                    var_dump($f4 == $f6);  # bool(false)

    */
    // 浮點類型：
    $f1 = 1.23;
    $f2 = 1.23e10;
    $f3 = PHP_INT_MAX + 1;

    echo "<br /><br />";
    echo $f1; # 1.23
    echo "<br /><br />";
    var_dump($f2);  # float(12300000000)
    echo "<br /><br />";
    var_dump($f3);  # float(9.2233720368548E+18)
    echo "<br /><br />";
    var_dump($f1,$f2,$f3); # float(1.23) float(12300000000) float(9.2233720368548E+18)
    echo "<hr />";

    // 浮點數不夠精確：
    $f4 = 0.7;
    $f5 = 2.1;
    $f6 = $f5 / 3 ;

    var_dump($f6);  # float(0.7)
    var_dump($f4 == $f6);  # bool(false)

    /*
        三、布爾類型：
            - 僅有兩個值：true 和 false，通常用於判斷比較。
            - 在進行某些數據判斷時，需要特別注意「類型轉換」。
                1.empty()：判斷數據的值是否為"空"，不是 NULL，如果為空返回 true，
                  不為空返回false。
                2.isset()：判斷數據存儲的變量本身是否存在，變量存在則返回ture，
                  不存在返回false。

    */