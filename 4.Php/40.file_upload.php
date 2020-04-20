<?php
/*
    ● 文件上傳：
        一、表單寫法：
            1.method屬性：表單提交方式 必須 是POST。
            2.enctype屬性：form表單屬性，主要是規範表單數據的編碼方式。
                - 文件上傳時使用「multipary/form-data」。
            3.表單元素：file表單。

        二、$_FILES：
            - 在PHP中有一個預定義變量 $_FILES 是專門用來存廚用戶上傳的文件的。
                array(1) {
                    ["images"]=>
                    array(5) {
                        ["name"]=>
                        string(28) "動態網站訪問原理.jpg"
                        ["type"]=>
                        string(10) "image/jpeg"
                        ["tmp_name"]=>
                        string(24) "E:\XAMPP\tmp\phpABD8.tmp"
                        ["error"]=>
                        int(0)
                        ["size"]=>
                        int(282729)
                    }
                }

            - $_FILES 變量的說明：
                1.name：文件在用戶電腦(瀏覽器端)上實際存在的名字(實際是
                  用來保存後綴的.jpg)。
                2.type：MIME類型(多功能網絡郵件擴展)，用來在計算機客戶端
                  中識別文件類型的。
                3.tem_name：文件上傳到伺服器後，操作系統保存的臨時路徑(
                  實際用來給PHP後期移動使用)。
                4.error：文件上傳的代號，用來告知應用軟體(PHP)文件接收過
                  程中出現了什麼問題。
                    - 值為 0 ~ 4 => 用戶操作問題。
                    - 值為 6 ~ 7 => 伺服器端問題。
                5.size：文件大小(PHP根據實際需求來確認是否該保留)。
*/

echo "<pre>";

var_dump($_FILES);
/*
array(1) {
  ["images"]=>
  array(5) {
    ["name"]=>
    string(28) "動態網站訪問原理.jpg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(24) "E:\XAMPP\tmp\phpABD8.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(282729)
  }
}
*/