<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skor Terbesar</title>
</head>
<body>
    <h1>Skor Terbesar</h1>
    <?php
 $skor = [
        [
            "nama" => "Bobby",
            "kelas" => "Laravel",
            "nilai" => 78
        ],
        [
            "nama" => "Regi",
            "kelas" => "React Native",
            "nilai" => 86
        ],
        [
            "nama" => "Aghnat",
            "kelas" => "Laravel",
            "nilai" => 90
        ],
        [
            "nama" => "Indra",
            "kelas" => "React JS",
            "nilai" => 85
        ],
        [
            "nama" => "Yoga",
            "kelas" => "React Native",
            "nilai" => 77
        ],
        ];
 
function cmp($a, $b) {
    if ($a['nilai'] == $b['nilai']) {
        return 0;
    }
    return ($a['nilai'] > $b['nilai']) ? -1 : 1;
}
 
uasort($skor, 'cmp');
print_r($skor); 
?>
</body>
</html>