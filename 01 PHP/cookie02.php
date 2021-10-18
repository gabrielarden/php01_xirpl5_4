<?php
if(isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " . $_COOKIE ['username']."</h1>";
} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}

if(isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cokkie 'namalengkap' ada. Isinya : " . $_COOKIE ['namalengkap']."</h1>";
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}
?>