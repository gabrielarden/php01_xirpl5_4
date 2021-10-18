<html>
<head>
    <title>Session 1</title>
</head>
<body>
    <?php
    session_start();

    $_SESSION['nama'] = "Rifdah Inas Nazhifah";
    echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
    ?>
</body>
</html>