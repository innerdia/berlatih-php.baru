<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
    <h1>Ubah Huruf</h1>
    <?php
        function ubah_huruf($string){
        //kode di sini
            echo "ubah_huruf('$string') <br>";
            $huruf = 'abcdefghijklmnopqrstuvwxyz';
            $output = "";
            for($j=0; $j<strlen($string); $j++){
                $posisi = strrpos($huruf, $string[$i]);
                $output .= substr($huruf, $posisi+1, 1);
            }
            return $output;
            echo "<br><br>";
        }

        // TEST CASES
        echo ubah_huruf('wow'); // xpx
        echo ubah_huruf('developer'); // efwfmpqfs
        echo ubah_huruf('laravel'); // mbsbwfm
        echo ubah_huruf('keren'); // lfsfo
        echo ubah_huruf('semangat'); // tfnbohbu
    ?>
</body>
</html>