<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>透過php輸出99乘法表</title>
    <style>

        tr,td{
            border:1px solid black;
            border-collapse:collapse;
        }

    </style>
</head>
<body>

    <!--
        PHP的流程控制替代語法：
            - 分支和循環結構的替代語法。
            - PHP本身是嵌入到HTML中的腳本語言，需要在HTML中輸寫一些關於判斷或者循
              環的結構語法，必須符合PHP標籤規範，需要HTML與PHP進行混搭，如果使用原
              始的PHP代碼那麼會非常不美觀。
            - 在PHP書寫到HTML中的這些大括號{}非常不美觀，也不易識別，所以PHP提供了
              一種替代機制，讓其可以不用輸寫大括號。
            - 替代機制：
                    左大括號{ => : 、 右大括號} => end對應標記替代;
            - 只有以下以種可以進行替代：

                1.for(){} => for(): endfor;
                2.if(){} => if(): endif;
                3.switch(){} => switch(): endswitch;
                4.while(){} => while(): endwhile;
                5.foreach(){} => foreach(): endforeach;
    -->

    <table>
        <?php
            for($i = 1 ; $i < 10 ; $i++):?>
                <tr>
                    <?php
                        for($j = 1; $j <= $i ; $j++):?>
                            <td>
                                <?php echo $i . " * " . $j . " = " . $i * $j;?>
                            </td>
                        <?php endfor ?>
                </tr>
            <?php endfor; ?>
    </table>
    <table>
        <?php
            for($i = 1;$i < 10;$i++):?>
            <tr>
                <?php
                    for($j = 1 ; $j <= $i ; $j++):?>
                        <td>
                            <?php echo $j." * ".$i." = ".$j*$i;?>
                        </td>
                <?php endfor ?>
            </tr>
            <?php endfor ?>
    </table>

</body>
</html>