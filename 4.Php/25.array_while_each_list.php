<?php
/*
    ● 陣列遍歷：while 搭配 each() 及 list()

        一、while、each() 及 list()：
            1.while()：是在外部定義邊界條件，如要實現可以和for循環一樣。

            2.each()：
                - each()能夠從一個陣列中獲取「當前陣列指針所指向的元素的下標和值」，
                  獲取到後將指針下移(但不會在獲取，除非搭配循環)，同時將原本拿到的元
                  素的下標和值，以「一個四個元素」的陣列返回。

                - each()返回的四個陣列元素：
                    0下標 => 取得元素的下標值
                    1下標 => 取得元素的值
                    key下標 => 取得元素的下標值
                    value下標 => 取得元素的值

                    ※ each()是返回「索引陣列」及「關聯陣列」，所以有四個元素。
                    ※ 如果each()取不到結果(指針指向最後)，會返回false

                - list()：
                    - list()是一種結構，算不上一種函數(沒有返回值)，是list()提供
                      一堆變量去從一個陣列中取得元素值，然後依次賦值到對應的變量
                      當中(批量為變量賦值，值來源陣列)。
                    - 但是使用list()是有條件限制：
                        1.list必須從「索引陣列」中去獲取數據，關聯陣列無法獲取。
                        2.索引陣列的下標必須從「0」開始，且必須依序下去，不可跳號。
*/
// each()：
$arr = array(1,"name" => "DL");

echo "<pre>";

print_r(each($arr));  //  一獲取完當前元素的下標和值後，指針下移
/*
Array
(
    [1] => 1           # 元素的值
    [value] => 1       # 元素的值
    [0] => 0           # 元素的下標
    [key] => 0         # 元素的下標
)
*/
echo "<br /><br />";

print_r(each($arr)); # 獲取完再次下移
/*
Array
(
    [1] => DL
    [value] => DL
    [0] => name
    [key] => name
)
*/

echo "<br /><br />";

var_dump(each($arr)); # bool(false) → 取不到結果，返回false

echo "<hr />";

// list()：
$arr2 = array(1, 2 => 2);
list($first) = $arr; # 獲取索引下標0的值
echo $first;  # 1

echo "<br /><br />";
list($first,$second) = $arr;
# Notice:  Undefined offset: 1 in E:\XAMPP\htdocs\php\25.array_while_each_list.php on line 70
/*
    此時因為$second是要獲取#arr的下標[1]的值，但是該陣列的下一個下標是[2]=>2，並沒有[1]，
    因此報錯，找不到下標 1。
*/
echo $first,$second;
# 1


echo "<hr />";
/*
        二、while 搭配 each()、list() 來遍歷陣列的方式：
            - list()與each()搭配特別好：
                each()一定有兩個元素是 0 和 1 的下標元素，而list()正好需要從
                0 開始的索引下標，並且要依序，所以互相搭配剛剛好。

            - list(變量1,變量2,..,變量n) = each(陣列);
                - 是一種賦值運算，因為當each()獲取不到結果為false時，整個表達式
                  就為 false，因此可以作為while的條件表達式。

            while(list($first,$second) = each($arr3)){
                echo "下標 => ".$first." 值 => ".$second."<br />";
            }
*/
// while 搭配 each()、list() 來遍歷陣列的方式：
$arr3 = array(1,"name" => "DL",2,"age" => 29);

while(list($first,$second) = each($arr3)){
    echo "下標 => ".$first." 值 => ".$second."<br />";
}
/*
下標 => 0 值 => 1
下標 => name 值 => DL
下標 => 1 值 => 2
下標 => age 值 => 29
*/

