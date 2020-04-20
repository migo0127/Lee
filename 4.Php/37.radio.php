<?php
/*
    PHP處理單選框數據：
        單選按鈕的數據處理是可以出現多個選項，但是只能選擇其中一個。

            1.表單中使用的name屬性，使用同名即可：只能選擇一個。
            2.後台接收數據也不需要額外處理。
            3.資料庫存儲的話只需要一個字段存儲普通數據即可(數字或字符串)。
            4.PHP拿到數據之後，組織SQL直接存儲到資料表即可。
*/
// 37.radio.htm;

echo "<pre>";

print_r($_POST);

/*
Array
(
    [gender] => 女
    [sub] => 提交
)
*/
echo "<br />";

$gender = isset($_POST["gender"]) ? $_POST["gender"] : array();

print_r($gender);

