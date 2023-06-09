<?php
  include("yonetim/ayar.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dinamik Web Sitesi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

      <header>
          <a href="javascript:void(0);" onclick="ac();" id="acdgm">☰</a>
          <a href="javascript:void(0);" onclick="kapat();" id="kapatdgm">☰</a>
      </header>

      <aside id="menu">
        <h1>Dinamik<br>Web Sitesi</h1>
        <ul>
          <li><a href="#anasayfa"  onclick="kapat();">Ana Sayfa</a></li>
          <li><a href="#hakkimizda"  onclick="kapat();">Hakkımızda</a></li>
          <li><a href="#hizmetlerimiz"  onclick="kapat();">Hizmetlerimiz</a></li>
          <li><a href="#projelerimiz"  onclick="kapat();">Projelerimiz</a></li>
          <li><a href="#iletisim"  onclick="kapat();">İletişim</a></li>
        </ul>
      </aside>

      <main id="icerik">
        <section id="anasayfa">
        <h1>Dinamik Web Sitesi</h1>
          <h2>Portfolyo.</h2>
          <hr>
          <div class="temizle"></div>
          <?php
            $sorgu = $baglan->query("select * from portfolyo");
            while ($satir = $sorgu->fetch_object()) {
              $resim = substr($satir->resim,3);
              echo "<div class='galeri'>
              <a href='$resim' class='resimler' rel='group2' title='$satir->baslik'><img src='$resim' alt='$satir->baslik'></a>
              </div>";
            }
          ?>
          <div class="temizle"></div>
        </section>
        
        <section id="hakkimizda">
          <h2>Hakkımızda.</h2>
          <hr>
          <div class="temizle"></div>
          <?php
            $sorgu = $baglan->query("select * from hakkimizda");
            $satir = $sorgu->fetch_object();
            echo $satir->aciklama;
          ?>
        </section>

        <section id="hizmetlerimiz">
          <h2>Hizmetlerimiz.</h2>
          <hr>
          <div class="temizle"></div>
          <?php
            $sorgu = $baglan->query("select * from hizmetlerimiz");
            $satir = $sorgu->fetch_object();
            echo $satir->aciklama;
          ?>
        </section>

        <section id="projelerimiz">
          <h2>Projelerimiz.</h2>
          <hr>
          <div class="temizle"></div>
          <?php
            $sorgu = $baglan->query("select * from projelerimiz");
            $satir = $sorgu->fetch_object();
            echo $satir->aciklama;
          ?>
        </section>

        <section id="iletisim">
          <h2>İletişim.</h2>
          <hr>
          <div class="temizle"></div>
          <form method="post" action="https://formspree.io/f/****">
            <label for="adsoyad">Ad Soyad</label>
            <input type="text" name="adsoyad" id="adsoyad" required>

            <label for="telefon">Telefon</label>
            <input type="tel" name="telefon" id="telefon">

            <label for="eposta">E-posta</label>
            <input type="email" name="eposta" id="eposta">

            <label for="mesaj">Mesaj</label>
            <textarea name="mesaj" id="mesaj"></textarea>

            <button type="submit">Mesaj Gönder</button>
          </form>
        </section>
        
 
      </main>

      <script src="js/jquery-1.4.3.min.js"></script>
      <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script>
        $("a.resimler").fancybox();

        function ac() {
          if (document.querySelector("body").clientWidth<768) {
            document.getElementById("menu").style.width = "100%";
          }
            document.getElementById("menu").style.display = "block";
            document.getElementById("icerik").style.display = "none";
            document.getElementById("acdgm").style.display = "none";
            document.getElementById("kapatdgm").style.display = "block";
        }

        function kapat() {
          if (document.querySelector("body").clientWidth<768) {
            
            document.getElementById("menu").style.display = "none";
            document.getElementById("icerik").style.display = "block";
            document.getElementById("acdgm").style.display = "block";
            document.getElementById("kapatdgm").style.display = "none";
          }
       
        }
    </script>  

    </body>
</html>