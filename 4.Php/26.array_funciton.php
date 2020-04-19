<?php
/*
    陣列的相關函數：
        一、排序函數：
            - 對陣列元素進行排序，都是按照ASCII碼進行比較，可以進行英文比較。
            - 共有以下約 7 種：
                1.sort()：
                    - 按照值順序排序，「下標重排」。
                2.rsort()：
                    - 按照值逆序排序，「下標重排」。
                3.asort()：
                    - 按照值順序排序，「下標保留」。
                4.arsort()：
                    - 按照值逆序排序，「下標保留」。
                5.ksort()：
                    - 按照鍵名(下標)，順序排序。
                6.krsort()：
                    - 按照鍵名(下標)，逆序排序。
                7.shuffle()：
                    - 隨機打亂陣列元素，「下標重排」。
*/
// 一、陣列的排序函數：
echo "<p>一、陣列的排序函數：7 種</p>";

$arr = array(1,3,5,2,4);

echo"<h3>\$arr = array(1,3,5,2,4);</h3>";
print_r($arr);

echo "<br /><br />";

echo "<p>1.sort()：依值順序排序，下標重排</p>";
sort($arr);
print_r($arr);

echo "<br /><br />";

$arr2 = array(1,3,5,2,4);

echo"<h3>\$arr2 = array(1,3,5,2,4);</h3>";
print_r($arr2);

echo "<p>2.rsort()：依值逆序排序，下標重排</p>";
rsort($arr2);
print_r($arr2);

echo "<hr />";

$arr3 = array(1,3,5,2,4);

echo"<h3>\$arr3 = array(1,3,5,2,4);</h3>";
print_r($arr3);

echo "<br /><br />";

echo "<p>3.asort()：依值順序排序，下標保留/跟隨</p>";
asort($arr3);
print_r($arr3);

echo "<br /><br />";

$arr4 = array(1,3,5,2,4);

echo"<h3>\$arr4 = array(1,3,5,2,4);</h3>";
print_r($arr4);

echo "<br /><br />";

echo "<p>4.arsort()：依值逆序排序，下標保留/跟隨</p>";
arsort($arr3);
print_r($arr3);

echo "<hr />";

$arr5 = array(1,3,5,2,4);

echo"<h3>\$arr5 = array(1,3,5,2,4);</h3>";
print_r($arr5);

echo "<br /><br />";

echo "<p>5.ksort()：依鍵名(下標)順序排序，值保留/跟隨。</p>";
ksort($arr5);
print_r($arr5);

echo "<br /><br />";

echo "<p>6.krsort()：依鍵名(下標)逆序排序，值保留/跟隨。</p>";
krsort($arr5);
print_r($arr5);

echo "<hr />";

$arr6 = array(1,3,5,2,4);

echo"<h3>\$arr6 = array(1,3,5,2,4);</h3>";
print_r($arr6);

echo "<p>7.shuffle()：值隨機排序，下標重排</p>";
shuffle($arr6);
print_r($arr6);

echo "<br /><br />";

shuffle($arr6);
print_r($arr6);

echo "<hr />";

/*
        二、指針函數：6種
            1.reset()：
                - 重置指針，將陣列指針重置回到第一個元素。
            2.end()：
                - 重置指針，將陣列指針重置回到最後一個元素。

            3.next()：
                - 指針下移，並取得下一個元素的值。
            4.prev()：
                - 指針上移，並取得上一個元素的值。
            5.current()：
                - 獲取當前指針對應的元素值。
            6.key()：
                - 獲取當前指針對應的元素下標。

        ※※ 注意：
            next() 和 prev() 會移動指針，有可能導致指針移動到最前或最後，發生離開
            陣列的情況，導致陣列無法使用，此時通過next()和prev()無法回到正確的指針
            位置，只能通過 end() 或者 reset() 進行指針重置。
*/
// 二、陣列的指針函數：6種
echo "<p>二、陣列的指針函數：6種</p>";

$arr7 = array(1,3,5,7,9);

echo "<h3>\$arr7 = array(1,3,5,7,9);</h3>";

echo "<p>1.key()：獲取當前指針對應的元素下標</p>";

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<p>2.current()：獲取當前指針對應的元素值</p>";

echo "<p>current(\$arr7)：";

echo current($arr7);

echo "<p>3.next()：指針下移，並獲取該元素的值</p>";

echo "<p>next(\$arr7)：";

echo next($arr7);

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<p>next(\$arr7)：";

echo next($arr7);

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<p>4.prev()：指針上移，並獲取該元素的值</p>";

echo "<p>prev(\$arr7)：";

echo prev($arr7);

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<p>5.end()：重置指針，將陣列指針重置回到最後一個元素</p>";

echo "<p>end(\$arr7)：";

echo end($arr7);

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<p>6.reset()：重置指針，將陣列指針重置回到第一個元素</p>";

echo "<p>reset(\$arr7)：";

echo reset($arr7);

echo "<p>key(\$arr7)：";

echo key($arr7);

echo "<br / ><br / >";

echo"<h3>※※注意：</h3>";
echo"<h3>next() 和 prev() 會移動指針，有可能導致指針移動到最前或最後，發生離開陣列的情況，導致陣列無法使用，此時通過next()和prev()是無法回到正確的指針位置，只能通過 end() 或者 reset() 進行指針重置。</h3>";

echo "<hr />";
/*
        三、其他函數：
            1.count()：統計陣列中元素的長度(數量)。
            2.array_push()：與JS相同。
            3.array_pop()：與JS相同。
            4.array_shift()：與JS相同。
            5.array_unshift()：與JS相同。
            6.array_reverse()：與JS相同。

        ※  7.in_array()：
                - 判斷一個元素在陣列中是否存在，返回bool值。

        ※  8.array_keys()：
                - 獲取一個陣列中所有的下標，並返回一個索引陣列。

        ※  9.array_values()：
                - 獲取一個陣列中所有的值，並返回一個索引陣列。
*/
// 三、其它函數：
echo "<p>三、其它函數：9種</p>";

echo "<p>7.in_array()：判斷一個元素在陣列中是否存在，返回bool值。</p>";

$arr8 = array(2,4,6,8,10);

echo "<h3>\$arr8 = array(2,4,6,8,10);</h3>";

echo "in_array(8,\$arr8)：";

var_dump(in_array(8,$arr8));

echo "<br /><br />";

echo "in_array(5,\$arr8)：";

var_dump(in_array(5,$arr8));

echo "<br /><br />";

echo "<p>8.array_keys()：獲取一個陣列中所有的下標，並返回一個索引陣列。</p>";

$arr9 = array(2,4,6,8,10);

echo "<h3>\$arr9 = array(2,4,6,8,10);</h3>";

echo "array_keys(\$arr9)：";

print_r(array_keys($arr9));

echo "<br /><br />";

echo "<p>10.array_values()：獲取一個陣列中所有的值，並返回一個索引陣列。</p>";

$arr9 = array(2,4,6,8,10);

echo "<h3>\$arr9 = array(2,4,6,8,10);</h3>";

echo "array_values(\$arr9)：";

print_r(array_values($arr9));

echo"<h3>※※重點：</h3>";
echo"<h3>array_keys() 和 array_values()，可以分別取出陣列的所有下標及所有值，且返回一個索引陣列，可以利用此特性在陣列循環/遍歷中用，所以要熟悉！！</h3>";


echo "<br /><br />";