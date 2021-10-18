<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['nama'];
    echo $name;
    $alamat = $_POST['alamat'];
    echo "<br>";
    echo $alamat;
}
?>