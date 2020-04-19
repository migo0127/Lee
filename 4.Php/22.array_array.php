<?php
/*
    一、多維陣列：
        - 陣列裡面的元素又是陣列。
        - 在PHP中沒有維度限制(PHP本質並沒有二維陣列)。
        - 但是不建議使用超過三維以上的陣列，會增加訪問的複雜度及降低訪問效率。

    二、二維陣列：
        - 陣列中所有的元素都是一維陣列。
        - 例：


    三、異形陣列(不規則陣列)：
        - 陣列中的元素不規則，有普通基本變量也有陣列。
        - 在實際開發中並不常用，都會盡量讓陣列元素規則化，便於進行訪問。
*/
// 一維陣列：
$arr = array(
    "name" => "DL",
    "age" => 28
);

echo "<pre>";

print_r($arr);
/*
Array
(
    [name] => DL
    [age] => 28
)
*/
echo "<br /><br />";

$arr1 = array(1,2,3,4,5);

print_r($arr1);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
*/

echo "<br /><br />";

// 2.二維陣列：
$arr2 = array(
    array(
        "name" => "三星堆",
        "age" => 5200
    ),
    array(
        "name" => "光頭強",
        "age" => 18
    ),
    array(
        "name" => "DL",
        "age" => 29
    )
);

print_r($arr2);
/*
Array
(
    [0] => Array
        (
            [name] => 三星堆
            [age] => 5200
        )

    [1] => Array
        (
            [name] => 光頭強
            [age] => 18
        )

    [2] => Array
        (
            [name] => DL
            [age] => 29
        )

)
*/
