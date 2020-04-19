<?php

    /*
        字符串相關函數：
            (一)、轉換函數：
                1.implode()：陣列→字符串
                    - 將陣列中的元素按照某個規則連接成一個字符串。
                    - 語法：
                        第一個參數：連接放式，可省略不寫，默認為""。
                        第二個參數：要連接的陣列。

                        implode("連接方式",陣列);

                2.explode()：字符串→陣列
                    - 將字符串按照某個格式進行分割，變成陣列。
                    - 語法：
                        第一個參數：分割的指定字符。
                        第二個參數：要轉換的目標字符串。
                        第三個參數：可省略不寫，返回陣列元素的長度。

                        explode("分割字符",目標字符串,返回陣列長度);

                3.str_split()：字符串 → 陣列
                    - 按照指定長度拆分字符串得到陣列。
                    - 語法：
                        第一個參數：目標字符串。
                        第二個參數：指定字符串長度，可省略，默認為 1。

                        str_split(目標字符串,指定字符串長度);


    */
    // 轉換函數：
    echo "<h2>一、轉換函數：3種</h2>";

    # 1.implode()：將陣列中的元素按照某個規則連接成一個字符串。
    echo "<p>1.implode()：將陣列中的元素按照某個規則連接成一個字符串。</p>";

    echo "<h3>\$arr = array('hello','world','beautiful','day');</h3>";

    $arr = array("hello","world","beautiful","day");
    echo "1-1.implode(' ',\$arr)：".implode(" ",$arr);
    # hello world beautiful day

    echo "<br /><br />";
    echo "1-2.implode('-',\$arr)：".implode("-",$arr);
    echo "<p>------------------------------------------------------------------</p>";

    # 2.explode()：將字符串按照某個格式進行分割，變成陣列。
    echo "<p>2.explode()：將字符串按照某個格式進行分割，變成陣列。</p>";

    echo "<h3>\$str = 'hello world. It's a beautiful day.';</h3>";

    $str = "hello world. It's a beautiful day.";
    echo "<pre>";
    echo "2-1.explode(' ',\$str)：<br /><br />";
    print_r(explode(" ",$str));
    echo "<br /><br />";

    $str2 = "123,156,189";
    echo "<h3>\$str2 = '123,156,189';</h3>";
    echo "2-2.explode(',',\$str2)：<br /><br />";
    print_r(explode(",",$str2));
    echo "<br /><br />";

    echo "2-2.explode('1',\$str2)：<br /><br />";
    print_r(explode("1",$str2));
    echo "<p>------------------------------------------------------------------</p>";

    # 3.str_split()：按照指定長度拆分字符串得到陣列。
    $str3 = "987654321";

    echo "<p>3.str_split()：按照指定長度拆分字符串得到陣列。</p>";

    echo "<h3>\$str3 = '987654321';</h3>";

    echo "3-1.str_split(\$str3,3)：<br /><br />";
    print_r(str_split($str3,3));

    echo "<br /><br />";

    echo "3-2.str_split(\$str3,1)：<br /><br />";
    print_r(str_split($str3,1));

    echo "<hr />";

    /*
            (二).截取函數：
                1.trim()：
                    - 本身默認是用來去除兩邊的空格(中間不行)，但是也可以指定要去除
                      的左右兩邊的指定字符。
                    - 是按照指定的內容循環去除兩邊有的內容，直到碰到一個不是目標字
                      符為止。
                    - 語法：
                        第一個參數：目標字符。
                        第二個參數：指定字符，可省略不寫，默認刪除 NULL、空格、tab等。
                        trim(目標字符,指定字符)


    */
    // 截取函數：
    echo "<h2>二、截取函數：3種</h2>";

    # 1.trim()：本身默認是用來去除兩邊的空格(中間不行)，但是也可以指定要去除的左右兩邊的指定字符。

    $str4 = " 987 6543 21    ";

    echo "<p>1.trim()：本身默認是用來去除兩邊的空格(中間不行)，但是也可以指定要去除的左右兩邊的指定字符。</p>";

    echo "<h3>\$str4 = ' 987 6543 21    ';</h3>";
    echo "1-1-1.trim(\$str4)：<br /><br />";
    print_r(trim($str4));

    echo "<br /><br />";

    $str5 = "aa 987a a6543 21   aaa";
    echo "<h3>\$str5 = 'aa 987a a6543 21   aaa';</h3>";
    echo "1-1-2.trim(\$str5,'a')：<br /><br />";
    print_r(trim($str5,"a"));

    $str6 = "aaaaa 987a a6543aa 21   aaa";
    echo "<h3>\$str6 = 'aaaaa 987a a6543aa 21   aaa';</h3>";
    echo "1-1-3.trim(\$str6,'aa')：<br /><br />";
    print_r(trim($str6,"aa"));

    echo "<p>------------------------------------------------------------------</p>";

    echo "<p>1-2.ltrim()：去除左邊的空格，但是也可以指定要去除左邊的指定字符。</p>";
    $str7 = "b 987b b6543bb 21   bb";
    echo "<h3>\$str7 = 'b 987b b6543bb 21   bb';</h3>";
    echo "1-2.ltrim(\$str6,'b')：<br /><br />";
    print_r(ltrim($str7,"b"));

    echo "<p>------------------------------------------------------------------</p>";

    echo "<p>1-3.rtrim()：去除右邊的空格，但是也可以指定要去除右邊的指定字符。</p>";
    $str7 = "c 987c c6543cc 21   cc";
    echo "<h3>\$str7 = 'c 987c c6543cc 21   cc';</h3>";
    echo "1-3.rtrim(\$str7,'c')：<br /><br />";
    print_r(rtrim($str7,"c"));

    echo "<hr />";

    /*
            (三).截取函數：
                1.substr()：
                    - 指定位置開始截取字符串，可以截取指定長度，若未指定，則截去到最後。
                    - 語法：
                        第一個參數：目標字符串。
                        第二個參數：起始位置(0起)。
                        第三個參數：長度，可省略不寫，默認到最後。

                        substr(指定字符串,起始位,截取長度);

                2.strstr()：
                    - 從指定位置開啟截取到最後。
                    - 語法：
                        第一個參數：目標字符串。
                        第二個參數：匹配字符。

                        strstr(目標字符串,匹配字符);

    */
    // 三、截取函數：
    echo "<h2>三、截取函數：2種</h2>";
    # 1.substr()：指定位置開始截取字符串，可以截取指定長度，若未指定，則截去到最後。

    $str8 = "hello world！";

    echo "<p>1.substr()：指定位置開始截取字符串，可以截取指定長度，若未指定，則截去到最後。</p>";

    echo "<h3>\$str8 = 'hello world！';</h3>";
    echo "1-1.subsrt(\$str8,2)：<br /><br />";
    print_r(substr($str8,2));

    echo "<br /><br />";

    echo "<h3>\$str8 = 'hello world！';</h3>";
    echo "1-2.subsrt(\$str8,2,5)：<br /><br />";
    print_r(substr($str8,2,5));

    echo "<p>------------------------------------------------------------------</p>";

    # 2.strstr()：從指定位置開啟截取到最後。
    $str9 = "hello world！";

    echo "<p>2.strstr()：從指定位置開啟截取到最後。</p>";

    echo "<h3>\$str9 = 'hello world！';</h3>";
    echo "1-1.strstr(\$str9,'l')：<br /><br />";
    print_r(strstr($str9,"l"));

    echo "<hr />";

    /*
            (四).查找函數：
                1.strpos()：
                    - 判斷字符在目標字符串中出現的位置(首次出現)。

                2.strrpos()：
                    - 判斷字符在目標字符串中最後出現的位置。
    */
    // 四、查找函數：
    echo "<h2>四、查找函數：2種</h2>";
    # 1.strpos()：判斷字符在目標字符串中出現的位置(首次出現)。

    $str10 = "ba123a4a583b555a";

    echo "<p>1.strpos()：判斷字符在目標字符串中出現的「位置(首次出現)」。</p>";

    echo "<h3>\$str10 = 'ba123a4a583b555a';</h3>";
    echo "1-1.strpos(\$str10,'a')：";
    echo strpos($str10,"a"),"<br />";

    echo "<br />";

    echo "1-2.strpos(\$str10,'b')：";
    echo strpos($str10,"b"),"<br />";

    echo "<p>------------------------------------------------------------------</p>";

    echo "<p>2.strrpos()：判斷字符在目標字符串中「最後出現的位置」。</p>";

    echo "1-1.strrpos(\$str10,'a')：";
    echo strrpos($str10,"a"),"<br />";

    echo "<br />";

    echo "1-2.strrpos(\$str10,'b')：";
    echo strrpos($str10,"b"),"<br />";

    echo "<hr />";

    /*
        五、替換函數：
            1.str_replace()：
                - 將目標字符串中指定字符進行替換。
                - 語法：
                    第一個參數：要替換的字符。
                    第二個參數：替換的內容。
                    第三個參數：目標字符串。

                    str_replace("要替換的字符","替換的內容",目標字符串);

    */
    // 五、替換函數：
    echo "<h2>五、替換函數：：1種</h2>";
    # 1.str_replice()：將目標字符串中指定字符進行替換。

    $str11 = "a-b-a-b-c";

    echo "<p>1.str_replace()：將目標字符串中指定字符進行替換。</p>";

    echo "<h3>\$str11 = 'a-b-a-b-c';</h3>";
    echo "1-1.str_replace('a','b',\$str11)：";
    echo str_replace("a","b",$str11),"<br />";

    echo "<br />";

    echo "1-2.str_replace('-',',',\$str11)：";
    echo str_replace("-",",",$str11),"<br />";

    echo "<br />";

    echo "1-2.str_replace('b','y',\$str11)：";
    echo str_replace("b","y",$str11),"<br />";

    echo "<hr />";

    /*
        六、格式化函數：
            1.printf()、sprintf()：
                - 兩種差不多用法，格式化輸出數據。
                - 語法：
                    %d：十進制。
                    %b：二進制。
                    %s：字符串。

                - 例：

    */
    // 六、格式化函數：
    echo "<h2>六、格式化函數：：2種，但用法一樣</h2>";
    # 1.printf()、sprintf()：格式化輸出數據。

    $name = "DL";
    $age = 29;

    echo "<p>1.printf()、sprintf()：格式化輸出數據。</p>";

    echo "<p>\$name = 'DL';</p>";
    echo "<p>\$age = 29;</p>";

    echo "<p>1-1.printf('你好，我叫%s，今年%d歲',\$name,\$age)：</p>";
    echo printf("你好，我叫%s，今年%d歲",$name,$age);

    echo "<br />";

    echo "<p>1-2.sprintf('你好，我叫%s，今年%d歲',\$name,\$age)：</p>";
    echo sprintf("你好，我叫%s，今年%d歲",$name,$age);

    echo "<br />";

    echo "<p>1-3.printf('你好，我叫%s，今年%o歲',\$name,\$age)：</p>";
    echo printf("你好，我叫%s，今年%o歲",$name,$age);

    echo "<br />";

    echo "<p>1-4.sprintf('你好，我叫%s，今年%b歲',\$name,\$age)：</p>";
    echo sprintf("你好，我叫%s，今年%b歲",$name,$age);

    echo "<hr />";

    /*
        七、其它字符串函數：
            1.str_repeat()：
                - 重覆某個字符串N次。

            2.str_shuffle()：
                - 隨機打亂字符串，每次刷新都會隨機排序一次。
    */
    // 七、其它字符串函數：
    echo "<h2>七、其它字符串函數：2種</h2>";
    # 1.srt_repeat()：重覆某個字符串N次。

    $str12 = "abcde";

    echo "<p>1.srt_repeat()：重覆某個字符串N次。</p>";

    echo "<h3>\$str12 = 'abcde';</h3>";
    echo "1-1.str_repeat(\$str12,3)：";
    echo str_repeat($str12,3),"<br />";

    echo "<br />";

    echo "1-2.str_repeat(\$str12,2)：";
    echo str_repeat($str12,2),"<br />";

    echo "<p>------------------------------------------------------------------</p>";

     # 2.srt_shuffle()：隨機打亂字符串，每次刷新都會隨機排序一次，簡單驗證碼。
    $str13 = "abcde";
    echo "<p>2.srt_shuffle()：隨機打亂字符串，每次刷新都會隨機排序一次，簡單驗證碼。</p>";

    echo "<h3>\$str13 = 'abcde';</h3>";
    echo "2-1.str_shuffle(\$str13)：";
    echo str_shuffle($str13),"<br />";

    echo "<br />";

    $str14 = "123abc";

    echo "<h3>\$str14 = '123abc';</h3>";
    echo "2-2.str_shuffle(\$str14)：";
    echo str_shuffle($str14),"<br />";




