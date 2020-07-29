<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Aritmatika</title>
</head>
<body>
    <h1>Deret Aritmatika</h1>
    <?php
        function tentukan_deret_aritmatika($arr) {
        // kode di sini
            echo "tentukan_deret_aritmatika "; print_r($arr) ; echo "<br>";
            $a=$arr[1]-$arr[0];
            $result = true;
            for($b=1; $b<count($arr); $b++){
                if($arr[$b]-$arr[$b-1] != $a) {
                    $result = false;
                break;
                }
            }
            if ($result == true){
                echo "true <br><br>";
            }
            else{
                echo "false <br><br>";
            }
        }

        // TEST CASES
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
        echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
        echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
        echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>