<?php

    /*
        作用域(scope)：
            - 變量、常量能夠被訪問的區域。
                1.變量可以在普通代碼中定義。
                2.變量也可以在函數中定義。
            - 在PHP中作用域嚴格來說分為兩種，但是PHP內部還定義一種在嚴格之外的方式，
              所以總共有三種作用域的區分：
                1.全局變量：
                    - 就是用戶普通定義的變量(函數外部定義)。
                    - 所屬全局空間：
                        在PHP中只允許在全局空間使用，「理論上函數內部不可以訪問」！！
                        ※ 此與JS不同！！
                    - 腳本周期：直到角本運行結束(最後一行代碼執行完)。
                    - 參考局部變量最後一點！！

                2.局部變量：
                    - 就是在函數內部定義的變量。
                    - 所屬當前函數空間：
                        在PHP中只允許在當前函數自己內部使用。
                    - 函數周期：函數執行結束(函數是在棧區中開闢獨立內存空間運行)。
                    - 函數內部理論上無法訪問到全局變量，但可以透過
                        1.$GLOBALS["全局變量名"]; 的方式來實現，但通常不使用。
                        2.通過參數傳遞、引用傳值的方式使用。
                        3.在PHP中，可以實現全局訪問局部，局部訪問全局的方式，即
                          使用「global」關鍵字。

                          3-1.global關鍵字：是一種在函數理面定義變量的一種方式。
                            A.如果使用global定義的變量名在外部存在(全局變量)，那
                              麼系統就會在函數內部定義同一個變量直接指向外部全局
                              變量所指向的內存空間(同一個地址)。

                            B.如果使用global定義的變量名在外部不存在(全局變量)，
                              系統也會自動在全局空間(外部)定義一個與局部變量同名
                              且同指向的全局變量。

                            ※ 本質的形式：在函數的內部和外部，對一個global同名變量
                               (全局和局部)使用同一塊內存地址保存數據，從而實現共同
                               擁有。

                            - 語法：
                                global 變量名;  // 此時不能賦值
                                $變量名 = 值;  // 此時才能賦值
                        ※※ 雖然以上方式可以實現全局與局部的互訪，但通常不會這
                             麼使用，一般如果會存在局部特殊使用全局，也會使用參
                             數的形式來訪問，還可以使用常量(define定義的)來訪
                             問(沒有限制)。

                3.超全局變量：
                    - 系統定義的變量 (預定義變量：$_SERVER、$_POST等等)。
                    - 所屬超全局空間：
                        沒有彷問限制 (函數內外都可以訪問)。
                    - 超全局變量會將全局變量自動納入到$GLOBALS裡面，而$GLOBALS沒有
                      作用域限制，所以能夠幫助局部去訪問全局變量，但必須使用「陣列」
                      方式，不過通常不會這樣使用。
    */

    // 全局變量：
    $global = "global area";
    # 最終會被系統納入到超全局變量中 → #GLOBALS["global"] = "global area";

    // 局部變量 (函數內部定義)
    function test2(){
        $inner = __FUNCTION__;

        # 訪問全局變量：在PHP中不可訪問，在JS中可訪問！！
        # echo $global;
        # Notice: Undefined variable: global in E:\XAMPP\htdocs\php\13.scope.php on line 38  → 不能訪問全局變量

        # 透過超全局變量訪問全局變量的方式(使用陣列)，但通常不會這樣使用
        # echo $GLOBALS["global"]; # global area

        # 透過global關鍵字來訪問全局變量
        global $global;
        echo $global;  # global area

        # 定義一個global關鍵字變量來使全局訪問局部
        global $local;
        $local = " inner2";
    }

    test2();

    # echo $inner;
    # Notice: Undefined variable: inner in E:\XAMPP\htdocs\php\13.scope.php on line 44 → 不能訪問局部變量

    # 透過global關鍵字訪問局部變量
    echo $local;  # inner2