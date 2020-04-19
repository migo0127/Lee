<?php

    // 中文亂碼問題
    header("content-type:text/html;charset=utf-8");

    /*
        字符串長度問題：
            1.基本函數：
                strlen()：得到字符串的長度，字節為單位。
                    - 例：
                        $a="acsroiheoifh";
                        $b="你好！hollo world！";

                        echo strlen($a); # 12
                        echo strlen($b); # 23

            2.多字節字符串的長度問題：包含中文的長度。
            3.多字節字符串擴展模塊(插件)：mbstring 擴展(mb：Multi Bytes)。
                3-1.首先需要加載PHP的mbstring擴展，即確認配置文件中的mbstring是否
                    有啟用。
                    extension=mbstring

                3-2.可以使用mb擴展代來的很多函數。
                    - mbstring擴展真對的是一些關於字符統計的問題，比如：
                        strlen()：只針對標準交換碼ASCII來進行字符統計。
                        mbstring：會針對不同的字符集編碼來進行字符統計。
                    - 例：
                        // mb擴展函數
                        echo mb_strlen($a);  # 9
                        echo mb_strlen($b);  # 5
                        => 因上方有先告知瀏覽器中文使用UTF-8，所以中文變成用UFT-8來計算
                        echo mb_strlen($b,"utf-8"); # 5

    */
    // 基本函數 strlen()：
    $a="abc123def";
    $b="你好abc";

    echo strlen($a); # 9
    echo "<br />";
    echo strlen($b); # 9 ，中文占3個字節
    echo "<hr />";

    // mb擴展函數
    echo mb_strlen($a);  # 9
    echo "<br />";
    echo mb_strlen($b);  # 5 => 中文的變成用UFT-8來統計
    echo "<br />";
    echo mb_strlen($b,"utf-8"); # 5
    echo "<hr />";