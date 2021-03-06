<?php
/*
    編程思想：
        - 如何利用數學模式來解決對應的需求問題，然後理用代碼實現對應的數據模型(邏輯)。
        - 算法：
            - 使用代碼實現對應的數學模型，從而解決對應的問題。

        一、遞推(思想)算法：
            - 是一種簡單的算法，即通過已知條件，利永特定關係得出中間推論，直至得到
              結果的算法。
            - 遞推算法分為順推和逆推兩種。
                1.順推：通過最簡單的(已知)條件，然後逐步推演結果。
                2.逆推：通過結果找到規律，然後推到已知條件。

            - 斐波那契數列：1 1 2 3 5 8 13 .....。
            - 通常需求：求得指定位置N所為應的值是多少？
                - 找規律：
                    1.第一個數是 1。
                    2.第二個數也是 1。
                    3.第三個數開始：都是前兩個數的和。

                - 代碼解決思路：
                    1.如果數字位置 1 和 2 ，結果都是1。
                    2.從第三位開始，想辦法得到前兩個的結果，就可以得到自身的結果。

                - 終極解決辦法：
                    - 想辦法把要求的位置之前的所有的值都列出來，那麼要求的數就可以
                      通過前兩個之和計算出來。
*/
// 斐波那契數列： 1 1 3 5 8 13 .....
// 求出指定數對應的值

// 遞推思想算法：
# 已知條件：第一位及第二位的數都是1，第三位開始為前兩位之和
$f[1] = 1;
$f[2] = 1;

$des = 20;

for($i = 3 ; $i <= $des ; $i++){
    $f[$i] = $f[$i-1] + $f[$i-2];
}
echo "<pre>";

print_r($f);
/*
Array
(
    [1] => 1
    [2] => 1
    [3] => 2
    [4] => 3
    [5] => 5
    [6] => 8
    [7] => 13
    [8] => 21
    [9] => 34
    [10] => 55
    [11] => 89
    [12] => 144
    [13] => 233
    [14] => 377
    [15] => 610
)
*/

echo"<br /><br />";

// 優化：自定義一個函數重覆使用
function my_recursive($des){
    // 先判斷若是求的是第一位及第二位的值時，直接返回 1
    if($des == 1 || $des == 2){
        return 1;
    }

    // 已知條件
    $f[1] = 1;
    $f[2] = 1;

    // 只有求第三位開始的值時，才會進入for循環，求出指定位置前的值，並進行加總
    for($i = 3; $i <= $des ; $i++){
        $f[$i] = $f[$i-1]+$f[$i-2];
    }

    return $f[$des];

}

echo (my_recursive(20));
