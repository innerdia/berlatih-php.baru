<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Palindrome Angka</title>
    </head>
    <body>
        <h1>Palindrome Angka</h1>
        <?php

            function palindrome_angka($number) {
            // tulis kode di sini
                echo "palindrome_angka($number) <br>";
                while(true){
                    $number+=1;
                    $newnumber = intval(strrev(strval($number)));
                    if($newnumber == $number){
                        echo $newnumber . "<br>";
                    break;
                    }
                }
            }

            // TEST CASES
            echo palindrome_angka(8); // 9
            echo palindrome_angka(10); // 11
            echo palindrome_angka(117); // 121
            echo palindrome_angka(175); // 181
            echo palindrome_angka(1000); // 1001

        ?>
        </body>
</html>