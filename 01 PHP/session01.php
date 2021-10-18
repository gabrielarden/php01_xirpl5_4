<html>
<head>
    <title>Session 1</title>
</head>
<body>
    <?php
    session_start();

    $_SESSION['nama'] = "Nur Aliya Fajri";
    echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
    ?>
</body>
</html>