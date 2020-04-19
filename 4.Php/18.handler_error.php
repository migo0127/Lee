<?php

    # 處理PHP顯示中文時的亂碼問題
    header("content-type:text/html;charset:utf-8");

    /*
        自定義錯誤處理/顯示方式：
            - 最簡單的錯誤處理方式就是使用「trigger_error()」函數，但是該函數不會
              阻止系統報錯，所以會發生系統報錯後，在跳一次自定義報錯，變兩個錯誤訊
              息。

            - PHP系統提供了一種用戶處理錯誤的機制：
                - 用戶可以自定義錯誤處理函數，然後將該函數增加操作系統錯誤處理的句
                  柄中，在系統碰到錯誤之後，使用用戶自定義的錯誤函數來顯示。

            1.如何將用戶自定義的函數放到系統中？
                - 使用「set_error_handler()」函數來設置。
                - 語法：
                    set_error_handler(回調函數,錯誤級別);

            2.自定義錯誤處理函數：
                - 系統有要求，，系統會傳入5個實參，而至少需要前兩個形參來接收系統
                  傳入的實參，後三個自行選擇要不要接收。
                - 可設置5個形參，其中前兩個形參 ($errno、$errstr) 必須要有！！
                    1.$errno：顯然錯誤級別，比如：E_ERROR...(系統返回的說明)。
                    2.$errstr：顯示報錯誤時的信息文字說明(系統返回的說明)。
                    3.$errfile：顯示哪一個檔案/文件發生錯誤(系統返回的說明)。
                    4.$errline：顯示哪一行發生錯誤(系統返回的說明)。
                    5.$errcontext：顯示錯誤內容資訊(系統返回的說明)。

                - 創建流程：
                    1.自定義一個處理錯誤函數。
                        1-1.判斷：當前會碰到的錯誤有哪些(即php.ini文件中設置的
                        error_report項目)，錯誤級別不存在就不進行函數。

                        1-2.確認錯誤級別存在，進入switch()匹配錯誤級別對應的要
                        執行的語句。

                    2.註冊自定義函數：修改系統在處理錯誤機制時，使用的資訊。

                ※ 以下屬於簡單自定義模式，如果要複雜，還可以某些影響代碼功能的錯
                   誤發生後(進入switch匹配)，讓用戶跳轉到某個指定頁面(case執行語
                   句中設置跳轉到指定頁面或其它設置)。
    */
    // 創建一個自行定義的處理錯誤函數：
    function my_error($errno,$errstr,$errfile,$errline){
        # 判斷：當前會碰到的錯誤有哪些(即php.ini文件中設置的error_report項目)
        /*
            如果是 php.ini 中已排除的錯誤(即不存在的錯誤)，則返回false，因為設置項目
            就沒有這些錯誤級別，所以不進入自定義函數處理錯誤顯示資訊。

            error_reporting()：沒有參數時，表示顯示配置文件中設置的所有錯誤級別項。
            error_reporting() & $errno
            => E_ERROR & $erron
            => E_WARNING & $erron
            => ......

            ※ 而前面加的「!」，表示反轉，當以上這些不存在時，在進入if的執行語句，
               返回 false，不進入自定義函數處理錯誤顯示資訊。
        */
        if(!(error_reporting() & $errno)){
            return false;
        }

        # 開始匹配錯誤級別
        switch($errno){
            case E_ERROR:
            case E_USER_ERROR:
                echo "fatal error in file " . $errfile . " on line " . $errline . "<br />";
                echo "error info：" . $errstr . "<br />";
                break;

            case E_WARNING:
            case E_USER_WARNING:
                    echo "wraning error in file " . $errfile . " on line " . $errline . "<br />";
                    echo "error info：" . $errstr . "<br />";
                break;

            case E_NOTICE:
            case E_USER_NOTICE:
                    echo "notice error in file " . $errfile . " on line " . $errline . "<br />";
                    echo "error info：" . $errstr . "<br />";
                break;
        }

        return true;

    }
    # 仍是系統本身報錯時的顯示資訊：
    echo $a;
    # Notice: Undefined variable: a in E:\XAMPP\htdocs\php\18.handler_error.php on line 81


    # 修改報錯顯示機制，讓系統使用用戶自定意函數的設置來顯示報錯時的資訊
    set_error_handler("my_error");

    echo $a;
    # notice error in file E:\XAMPP\htdocs\php\18.handler_error.php on line 86
    # error info：Undefined variable: a

