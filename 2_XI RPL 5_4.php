<!DOCTYPE html>
<head>
    <title>Belajar LOOP</title>
</head>
<body>
    <h2>Perulangan</h2>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("d-m-Y ") . date("h:i:s"); 
    echo "<br>";
    echo "<br>";
    for($i=0;$i<=6;$i++){
    for($j=6-$i;$j>=1;$j--){
    echo "* ";
    }
    echo "<br>";
    }
    ?>
</body>