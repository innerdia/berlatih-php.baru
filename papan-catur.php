<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Papan Catur</title>
    </head>
    <body>
        <h1>Papan Catur</h1>

        <?php

            function papan_catur($number) {
            // tulis kode di sini
                echo "echo papan_catur($number) <br>";
                for($i=0; $i<$number; $i++){
                    for($j=0;$j<$number*2-($i%2);$j++){
                        if($i%2==0 && $j%2==0)echo "#";
                        if($i%2==0 && $j%2==1)echo "&nbsp;";
                        if($i%2==1 && $j%2==0)echo "&nbsp;";
                        if($i%2==1 && $j%2==1)echo "#";
                    }
                  
                    echo "<br>";
                }
                echo "<br><br>";
            }

            // TEST CASES
            echo papan_catur(4); 
            /*
            # # # #
            # # #
            # # # #
            # # #
            */

            echo papan_catur(8);
            /* 
            # # # # # # # #
            # # # # # # # 
            # # # # # # # #
            # # # # # # # 
            # # # # # # # #
            */

            echo papan_catur(5);
            /*
            # # # # #
            # # # #
            # # # # #
            # # # # 
            # # # # #
            */
        ?>
    </body>
</html>