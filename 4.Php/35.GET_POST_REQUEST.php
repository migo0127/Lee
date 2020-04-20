<?php
/*
    ● 表單傳值：
        - 不管是$GET、$POST、$REQUEST，三個都是PHP「超全局預定義陣列」(沒有
          範圍限制)。
        - 若是使用表單元素提交，則表單元素的「name」屬性對應的值就會作為陣列的
          「下標」，而value屬性對應的值作為陣列的元素值。
        - 若是表單元素沒有設定name屬性，則就不會被接收。

        - PHP接收數據的三種方式：
            1.$_GET方式：接收GET方式提交的數據。
            2.$_POST方式：接收POST方式提交的數據。
            3.$_REQUEST方式：接收$_GET和$_POST提交的所有數據。
                3-1.$_REQUEST：
                    - 所存儲的數據內容是再$_GET和$_POST接收數據後，將其合併存儲到
                      一個陣列中。
                3-2.$_REQUEST 和 $_GET 及 $_POST的關聯：
                    - 如果GET和POST中有名的陣列元素名(下標)，則POST會覆蓋GET (PHP
                    中陣列元素下標具有唯一性)，可以在php.ini中設定(但一般不改變)。
*/
// 透過 35.GET_POST_REQUEST.html 提交POST表單

var_dump($_GET);
# array(0) { }

echo "<hr />";

var_dump($_POST);
# array(2) { ["username"]=> string(4) "test" ["sub"]=> string(6) "submit" }
# 其中 password表單沒有設定name屬性，所以無法接收到

echo "<hr />";

var_dump($_REQUEST);
# array(2) { ["username"]=> string(4) "test" ["sub"]=> string(6) "submit" }
# 因$_GET沒有資料，所以只有獲取$_POST的陣列

echo "<hr />";