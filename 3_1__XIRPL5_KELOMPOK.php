<!DOCTYPE html>
<html>
    <title>ARRAY</title>
<body>
    <?php
    $namakelas = [
    [
        "Nama" => "Satria",
        "Kelas" => "RPL1"
    ],
    [
        "Nama" => "Arsyi",
        "Kelas" => "RPL2"
    ],
    [
        "Nama" => "Dhika",
        "Kelas" => "RPL3"
    ],
    [
        "Nama" => "Evan",
        "Kelas" => "RPL4"
    ],
    [
        "Nama" => "Fabian",
        "Kelas" => "RPL5"
    ],
    [
        "Nama" => "Irfan",
        "Kelas" => "RPL6"
    ],
];

echo "<pre>";
print_r($namakelas);
echo "</pre>";

foreach($namakelas as $siswa){
    echo "<p>Nama : " . "<b>" . $siswa["Nama"] . " </b>" . "Kelas : " . "<b>" . $siswa["Kelas"] . "</b>" . "</p>";
}
?>
</body>
</html>
