<?php
    session_start();
include("ayar.php");

if ($_POST) {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];
    $sorgu = $baglan->query("select * from kullanici where (kullanici='$kullanici' && sifre ='$sifre')");

    $kayitsay = $sorgu->num_rows;

    if ($kayitsay > 0) {
        setcookie("kullanici","dws",time()+60*60);
        $_SESSION["giris"] = sha1(md5("var"));
        echo "
            <script>
                window.location.href='anasayfa.php'
            </script>";

    } else {
        echo "
            <script>
                alert('HATALI KULLANICI BILGISI!'); window.location.href='index.php'
            </script>";
    }

}
?>
<!DOCTYPE html>
<html  >

<head>
    <meta charset="UTF-8"> 
    <title>Yönetim Paneli Giriş</title>
</head>

<body style="text-align: center;padding-top: 50px;">
    <form action="" method="post">
        <b>Kullanıcı Adi: </b><br>
        <input type="text" name="kullanici" required id=""><br>
        <b>Parola: </b><br>
        <input type="password" name="sifre" required id=""><br>
        <input type="submit" value="Giriş Yap">
    </form>

</body>

</html>