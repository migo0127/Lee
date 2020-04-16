<?php

    /*
        echo、print()、print_r()、var_dupm() 差別：
            1.echo：
                - 可以一次輸出多個值，多個值之間使用豆號分隔。
                - echo 是語言結構(language construct)，並不是真正的函數，因此
                  不能作為表達式的一部份使用。
                - 例：
                    echo 'one';
                    //輸出 one
                    echo('one');
                    //輸出 one
                    echo 'one','two','three';
                    //輸出 onetwothree

            2.print()：
                - print打印一個值(它的參數)，有返回值，如果字符串成功顯示
                  則返回true，否則返回false。
                - print() 和 echo 最主要的區別：
                    print() 僅支援一個引數，並總是返回 1。
                - 例：
                    print 'one';
                    //輸出`one`
                    print('one');
                    //輸出 one

            3.print_r()：
                - 類似var_dump()，但不會輸出類型，只會輸出值，陣列使用多。
                - 可以把字符串和數學簡單地打印出來，而「陣列」則以括起來的鍵值對的
                  列表形式顯示，並以Array開頭。
                - 但print_r()輸出布爾值和NULL的結果沒有意義，因為都是打印出「\n」。
                - 因此需要輸出「布爾值和NULL」時，使用 var_dump()更合適。

            4.var_dump()：
                - 顯示一個或多個表達式的「結構信息」，包括表達式的類型與值。
                - 鎮烈將遞歸展開值，通過縮進顯示其結構。

            ※ print_r() 和 var_dump() 的區別：
                - var_dump() 返回表達式的類型與值。
                - print_r() 僅反回結果。
                - 相比調試代碼使用var_dump()更便於閱讀。
                - 例：
                    $arr = array(
                       array('a'=>'aa','b'=>'bbb','c'=>'ccc'),
                       array('a'=>'ddd','b'=>'eee','c'=>'fff'),
                       array('a'=>'gg','b'=>'hh')
                    );

                    print_r($arr);
                    //print_r输出：
                    //Array ( [0] => Array (
                       [a] => aa [b] => bbb [c] => ccc ) 
                       [1] => Array ( [a] => ddd [b] => eee [c] => fff ) 
                       [2] => Array ( [a] => gg [b] => hh )
                    );

                    var_dump($arr);
                    //var_dump输出：
                     array (size=3)
                      0 => 
                      array (size=3)
                       'a' => string 'aa' (length=2)
                       'b' => string 'bbb' (length=3)
                       'c' => string 'ccc' (length=3)
                      1 => 
                      array (size=3)
                       'a' => string 'ddd' (length=3)
                       'b' => string 'eee' (length=3)
                       'c' => string 'fff' (length=3)
                      2 => 
                      array (size=2)
                       'a' => string 'gg' (length=2)
                       'b' => string 'hh' (length=2)

                - 例：json格式的输出：

                    $arr=array(array('a'=>'aa','b'=>'bbb','c'=>'ccc'), 
                               array('a'=>'ddd','b'=>'eee','c'=>'fff'),
                               array('a'=>'gg','b'=>'hh'));

                    $arra=json_encode($arr);

                    print_r($arra);
                    //print_r输出：
                     [{"a":"aa","b":"bbb","c":"ccc"},{"a":"ddd","b":"eee","c":"fff"},{"a":"gg","b":"hh"}]

                    var_dump($arra);
                    //var_dump输出：
                     string '[{"a":"aa","b":"bbb","c":"ccc"},{"a":"ddd","b":"eee","c":"fff"},{"a":"gg","b":"hh"}]' (length=84) 

            5.var_export()：
                    - 返回關於傳遞給該函式的變數的結構資訊的PHP程式碼，當$return引數
                      為 TRUE，var_export() 會直接返回資訊，而不是輸出。
                    - 例：
                        var_export( ['one'=>'123','two'=>'456','three'=>'789']);
                        // 輸出
                        array (
                            'one' => '123',
                            'two' => '456',
                            'three' => '789',
                        )

    */