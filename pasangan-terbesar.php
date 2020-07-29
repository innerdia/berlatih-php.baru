<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasangan Terbesar</title>
</head>
<body>
    <h1>Pasangan Terbesar</h1>
    <?php
        function pasangan_terbesar($angka){
        // kode di sini
        $angka_terbesar = substr ($angka, 0, 2);
        for($i=0; $i<= strlen($angka)-2; $i++){
            $pasangan = substr($angka, $i, 2);
            if($pasangan > $angka_terbesar){
                $angka_terbesar = $pasangan;

            }
        }   
echo $angka_terbesar . "<br>";
    }
        // TEST CASES
        echo pasangan_terbesar(641573); // 73
        echo pasangan_terbesar(12783456); // 83
        echo pasangan_terbesar(910233); // 91
        echo pasangan_terbesar(71856421); // 85
        echo pasangan_terbesar(79918293); // 99

        ?>
    
</body>
</html>