<?php
    session_start();
    include("ayar.php");
    if ($_SESSION["giris"] != sha1(md5("var"))  || $_COOKIE["kullanici"] != "dws") {
        header("Location: cikis.php");
    }

?>




<!DOCTYPE html>
<html  >

<head>
    <meta charset="UTF-8"> 
    <title>Yönetim Paneli Ana Safya</title>
</head>

<body>
    <div style="text-align: center;">
        <a href="anasayfa.php">ANA SAYFA</a>-
        <a href="portfolyo.php">PORTFOLYO</a>-
        <a href="hakkimizda.php">HAKKIMIZDA</a>-
        <a href="hizmetlerimiz.php">HIZMETLERIMIZ</a>-
        <a href="projelerimiz.php">PROJELERIMIZ</a>
        <a href="cikis.php"
            onclick="if(!confirm('Çıkış yapmak istediğinize emin misiniz?')) return false;">CIKIS</a><br>
        <hr><br><br>
    </div>
    <h2 style="text-align: center;">Menüden Seçim Yapınız</h2>
</body>

</html>