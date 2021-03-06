<?php
/*
    ● 表單傳值：
        二、PHP處理複選框數據：
            複選框表單項的命名方式：
                - 通常是將一類內容以同樣(同名)的形式傳遞給後台，資料庫存儲通常是一個
                  字段存儲。
                - 複選框的特點：選中的才會被提交。

                - 因為name屬性會是同名，所以會發生以下問題：
                    1.在瀏覽器端，checkbox的name屬性的值不論是什麼，都會被瀏覽器毫無
                      保留的提交。
                    2.在PHP中 $_POST、$_GET 都會對同名的 name屬性 進行覆蓋！！
                    => 所以會導致選中多個的時候，$_POST、$_GET 最終只會保留一個name屬
                       性及值，因為彼此覆蓋了。

                    ※ 解決方案：
                        - 瀏覽器不會識別[] (瀏覽器不認為[]有特殊性)，但是PHP認為[]具有特殊性。
                        - PHP 系統自動認為該符號是陣列的形式，所以PHP就會自動的將同名的，但帶
                          有[]的元素組合到一起，形成一個陣列。

                        => 所以在複選框的name屬性中，需要改寫成 name = "hobby[]" 的方式，這樣
                        $_POST、$_GET在接受數據時，就會自動將hobby[]當成一組陣列來存儲。
*/
// 接收 36.checkbox.html

echo "<pre>";

print_r($_POST);
/*
Array
(
    [hobby] => Array
        (
            [0] => 籃球
            [1] => 羽毛球
        )

    [sub] => 提交
)
*/