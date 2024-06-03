<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Web開発</title>
        <link href="./style.css" rel="stylesheet" type="text/css">
    </head>
    
    
    <body> 
        <div>
            <?php
                $start = date("5/27(Mon)");
                $end = date("5/27(Tru)");
                for($i=$start;$i=$end;$i=date('n/j(D)',strtotime($i . '+1 day'))){
                    print($i."\n");
                }
            ?>
        </div>
    </body>
</html>