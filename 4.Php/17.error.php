<?php
    /*
        一、錯誤處理：
            - 指的是系統(或者用戶)在對某些代碼進行執行的時候，發現有錯誤就會通過錯誤
              處理的形式告知程序員。

        二、錯誤分類：
            - 大致分為三種：
                1.語法錯誤(Parse error)：用戶書寫的代碼不符合PHP的語法規範，語法錯誤
                  會導致代碼在編譯過程中不通過，所以代碼不會在繼續執行。

                2.運行時錯誤(runtime error)：代碼編譯通過，但是代碼在執行的過程中會出
                  現一些條件不滿足導致的錯誤。

                3.邏輯錯誤：程序員在寫代碼的時候不夠規範，出現了一些邏輯性的錯誤，導致
                  代碼正常執行，但得不到想要的結果，比如用錯符號。
                    - 例：
                        $a = 10;
                        if($a=1){
                            // 執行
                        }

        三、錯誤代號：
            - 所以看到的錯誤代碼在PHP中都被定義成了「系統常量」，可以直接使用。
                1.系統錯誤：
                    1-1.E_PARSE：編譯錯誤，代碼不會執行。
                    1-2.E_ERROR：fatal error，致命錯誤，會導致代碼不能正確繼續執行，
                      在出錯的位置中斷。
                    1-3.E_WARNING：warning，警告錯誤，不會影響代碼執行，但是可能得到
                      意想不到的結果。
                    1-4.E_NOTICE：notice，通知錯誤，不會影響代碼執!。

                2.用戶錯誤：
                    - 比如 E_USER_ERROR、E_ISER_WARNING、E_USER_NOTICE...。
                    - 用戶在使用自定義錯誤觸發的時候，會使用到的錯誤代號，系統不會用。

                3.其他：
                    - E_ALL，代表著所有錯誤，通常在進行錯誤控制的時候使用的比較多，建
                      義在開發過程中(開發環境)使用。

            - 所有以「E」開頭的錯誤常量(代號)都是由一個字節(00000000)存儲，然後每一種
              錯誤占據一個對應的位，如果想進行一些錯誤的控制，可以使用位運算進行操作。
                - 例：
                    ● 排除通知級別 notice： E_ALL & ~E_NOTICE
                    ● 只要警告和通知： E_WARNING | E_NOTICE

        四、錯誤觸發：
            1.程序運行時觸發：
                - 系統自動根據錯誤發生後，對比對應的錯誤訊息輸出給用戶。
                - 主要針對代碼的語法錯誤和執行錯誤。
                - 例：
                    $a = 100   # 少 ;
                    # Parse error: syntax error, unexpected 'echo' (T_ECHO) in E:\XAMPP\htdocs\php\17.error.php on line 66

                    echo $a;

            2.人為觸發：trigger_error()
                - 知道某些邏輯可能會出錯，從而使用對應的判斷代碼來觸發相應的錯誤提示。
                - 語法：
                    第一個參數：要提示的警告文字。
                    第二個參數：錯誤的級別，若省略不寫，則默認為 E_USER_NOTICE。

                    trigger_error(參數1,參數2);
                - 例：
                    $a = 100;
                    $b = 0;

                    if($b == 0){
                        trigger_error("除數不能為 0");
                        # 默認為 E_USER_NOTICE，程式會繼續執行
                        #  Notice: 除數不能為 0 in E:\XAMPP\htdocs\php\17.error.php on line 75

                        trigger_error("除數不能為 0",E_USER_ERROR);
                        # 自定義錯誤，讓程序停在錯誤處，不會繼續執行
                        # Fatal error: 除數不能為 0 in E:\XAMPP\htdocs\php\17.error.php on line 77
                    }

                    echo "holle world";

    */
    // 錯誤觸發：
    # 1.程序運行時觸發：
    #  $a = 100
    # Parse error: syntax error, unexpected 'echo' (T_ECHO) in E:\XAMPP\htdocs\php\17.error.php on line 66

    # echo $a;

    #2.人為觸發：
    $a = 100;
    $b = 0;

    if($b == 0){
        trigger_error("除數不能為 0");
        # 默認為 E_USER_NOTICE，程式會繼續執行
        #  Notice: 除數不能為 0 in E:\XAMPP\htdocs\php\17.error.php on line 75

        trigger_error("除數不能為 0",E_USER_ERROR);
        # 自定義錯誤，讓程序停在錯誤處，不會繼續執行
        # Fatal error: 除數不能為 0 in E:\XAMPP\htdocs\php\17.error.php on line 77
    }

    echo "holle world";

    /*
        五、錯誤顯示設置
            - 設置哪些錯誤該顯示，以及該如何顯示。
            - 在PHP中，其實有兩種方式來設置當前腳本的錯誤處理。
                1.PHP的配置文件：
                    - 全局配置，E:\XAMPP\php\php.ini 中查看各個配置項目狀態與設定。
                        1-1.display_errors：是否顯示錯誤。
                            display_errors=On  => 顯示

                        1-2.error_reporting：顯示什麼級別的錯誤。
                            error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT
                            => 全部錯誤級別，但排除舊本級別及嚴格級別的錯誤

                            ● 以下是文件中在各環境時建議設定的級別說明：
                            ; Common Values:
                            ;   E_ALL (Show all errors, warnings and notices including coding standards.)
                            ;   E_ALL & ~E_NOTICE  (Show all errors, except for notices)
                            ;   E_ALL & ~E_NOTICE & ~E_STRICT  (Show all errors, except for notices and coding standards warnings.)
                            ;   E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR  (Show only errors)
                            ; Default Value: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
                            ; Development Value: E_ALL
                            ; Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT
                            ; http://php.net/error-reporting

                2.可以在運行的PHP腳本中去設置：
                    - 在腳本中定義的配置項級別比配置文件(php.ini)高，通常開發當中
                      都會在代碼中去進行控制和配置。
                        2-1.error_reporting()：
                            - 設置對應的錯誤顯示級別。
                                - error_reporting("E_ALL");
                            - 若沒有寫入參數，則表示「獲取」當前系統錯誤處理對應的級別。
                                error_reporting();

                        2-2.ini_set()：
                            - 語法：
                                ini_set("配置文件中的配置項目名",配置值);
                            - 例：
                                ini_set("error_reporting",E_ALL);
                                ini_set("display_errors",1[on]/0[off]);

        六、錯誤日誌設置：
            - 在實際生產環境(上線)，不會直接讓錯誤赤裸裸的展示給用戶。
                1.不友好：用戶無法理解錯誤信息。
                2.不安全：錯誤會暴露網站的很多信息(路徑、文件名...)。
            - 所以在生產環靜中，一般不顯示錯誤(錯誤也比較少)，但仍會有一些測試
              時沒有發現的錯誤被觸發，這個時候不希望用戶看到，但又希望這些錯誤
              可以被補捉讓後台程序員去修改，因此需要保存到日誌文件中，可以在PHP
              配置文件(php.ini)或者代碼中設置(ini_set)相對應的error_log配置項。

            - error_log：
                1.開啟日誌功能：
                    1-1.文件配置：php.ini
                        log_errors=On

                    1-2.代碼設置：
                        ini_set("log_error",1);

                2.指定錯誤日誌存儲的路徑位置：
                    2-1.文件配置：php.ini
                        ● 原始文檔： 沒有設定存儲位置
                            ;error_log = php_errors.log
                            ; Log errors to syslog (Event Log on Windows).
                            ;error_log = syslog

                        ● 自行設置：
                            ;error_log = php_errors.log
                            ; Log errors to syslog (Event Log on Windows).
                            ;error_log = syslog
                            error_log = "E:\XAMPP\php\error_log\php_error.log"


    */
