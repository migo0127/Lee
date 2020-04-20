<?php
/*
    ● 表單傳值的方式：兩種

        一、GET傳值：
            1.form表單：html
                <form method="GET">表單元素</form>

            2.a標籤：html
                <a href="www.itcast/index.php?學科=php"></a>

            3.location物件的href屬性：js
                <script>location.href="www.itcast/index.php?data=php"</scrpit>

            4.location物件的 assign() 方法：js
                <script>location.assign("www.itcast/index.php?data=php");</script>

        二、POST傳值：只有form表單
            1.form表單：
                <form method="POST">表單元素</form>

        三、GET方式與POST方式的區別：
            1.傳輸的數據：
                - GET 主要是用來獲取數據，不改變伺服器上的資源。
                - POST主要是用來增加數據，會改變伺服器上的資源。

            2.傳輸的方式上：
                - GET可以使用form表單和URL。
                - POST必須使用form表單。

            3.傳輸的數據是否可見：
                - GET傳輸的數據可以在URL中對外可見，GET傳輸的值最終會在瀏覽器的網址
                  欄中全部顯示： ?數據名=數據值&數據名2=數據值2....以此類推。
                - POST傳輸的數據不可見。

            4.傳輸的數據大小：
                - GET 為 2K。
                - POST理論上無限制。
                ※ 事實上，GET和POST本身沒有數據長度限制，但是瀏覽器廠商做了限制。

            5.傳輸的數據格式：
                - GET 傳輸簡單數據(數值/字符串..等)。
                - POST 除了簡單數據，還可以提交複雜數據(二進制等)。

*/