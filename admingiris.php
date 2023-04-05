<?php
require 'connectt.php';
?>
<!DOCTYPE html> <html lang="tr">
<head>
<meta charset="UTF-8">
<title>Anasayfa | Paylaştıkça</title>
    
    <link rel="stylesheet" href="styleee.css">
<script src="https://kit.fontawesome.com/c20485228a.js"
crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head> 
    <body>
        <section id="menu">
            <div id="logo"><a href="admingiris.php">vT</a></div>
            <nav>
            <a href="adminkayit.php"><i class="fas fa-user-friends ikon"></i>AK</a>
                <a href="adminaramaindex.php"><i class="fas fa-graduation-cap ikon"></i>Ara</a> 
                
                <a href="employee.php"><i class="fas fa-user-friends ikon"></i>Personel</a> 
                <a href="child.php"><i class="fas fa-user-friends ikon"></i>P.Çocuk</a>
                <a href="assigment.php"><i class="fas fa-user-friends ikon"></i>Assigment</a>
                <a href="unit.php"><i class="fas fa-user-friends ikon"></i>Unit</a>
                <a href="title.php"><i class="fas fa-user-friends ikon"></i>Title</a>
                <a href="province.php"><i class="fas fa-user-friends ikon"></i>Province</a>
                <a href="project.php"><i class="fas fa-user-friends ikon"></i>Project</a>
                <a href="personeliletisim.html"><i class="fas fa-map-pin ikon"></i>İletişim</a> 
                <a href="basgiris.php"><i class="fas fa-map-pin ikon"></i>Çıkış</a> 
            </nav>
        </section>
        
        
        <!-- <section id="anasayfa"> -->
            <div id="black">
                
            </div>
            <div id="icerik">
                <h2>Paylaştıkça</h2>
                <hr width="300" align="left">
                <p>Bilgiye ulaşmanın hem çok kolay hem de çok zor olduğu şu son zamanlarda, insanların bilgi ihtiyacını karşılamak için ille de basılı kaynaklara yönelmelerini beklemek oldukça yanlış bir düşünce biçimidir.</p>
            </div>
        <!-- </section>  -->
        
        
        <section id="hakkimizda">
            <h3>Hakkımızda</h3>
            <div id="container">
                <div id="sol">
                    <h5 id="h5sol">Bilgiye ulaşmanın hem çok kolay hem de çok zor olduğu şu son zamanlarda. </h5>
                </div>
                <div id="sag">
                    <span>L</span>
                    <p id="psag">Bilgiye ulaşmanın hem çok kolay hem de çok zor olduğu şu son zamanlarda, insanların bilgi ihtiyacını karşılamak için ille de basılı kaynaklara yönelmelerini beklemek oldukça yanlış bir düşünce biçimidir.
</p>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <img src="img/logiwa.png" style="align-items: center;" alt="" class="img-fluid mt100"> -->
                <p id="pson">
               Günlük hayatta yapmış olduğumuz gazete, kitap, magazin okuma, radyo dinleme, televizyon ya da film izleme, bilgisayar kullanma gibi hareketler bilgiye ulaşmak için kullandığımız yollardır. Her şeyin bu kadar çok ve çabuk değişti bir zaman diliminde, bilgiye ulaşmak için en önemli araçlardan birisi olarak tanımladığımız, bilgiye dayalı belgenin ham maddesi metinin ulaşım ve kullanım yollarının değişmemesini beklemek eksik bir düşüncedir.</p>
            </div>
        </section>
        
        <section id="islemler">
            <div class="container">
                <h3>İşlemler</h3>
                <div class="owl-carousel owl-theme">
                    <div class="card item" data-merge=1.5>
                    <img src="img/logiwa.png" alt="" class="img-fluid">
                        <h5 class="baslikcard">Yeni Doğan KAYIT</h5>
                        <p class="cardp">Günlük hayatta yapmış olduğumuz gazete, kitap, magazin okuma, radyo dinleme, televizyon</p>
                    </div>
                      <div class="card item " data-merge=1.5>
                    <img src="img/logiwa.png" alt="" class="img-fluid">
                        <h5 class="baslikcard">Yeni Doğan KAYIT</h5>
                        <p class="cardp">Günlük hayatta yapmış olduğumuz gazete, kitap, magazin okuma, radyo dinleme, televizyon</p>
                    </div>
                      <div class="card item" data-merge=1.5>
                    <img src="img/logiwa.png" alt="" class="img-fluid">
                        <h5 class="baslikcard">Yeni Doğan KAYIT</h5>
                        <p class="cardp">Günlük hayatta yapmış olduğumuz gazete, kitap, magazin okuma, radyo dinleme, televizyon</p>
                    </div>
                    
                    
                    
                  
                </div>
            </div>
        </section>

        
        
        <section id="iletisim">
            <div class="containerst">
                <h3 id="h3iletisim">İletişim</h3>
                
                
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                             <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="" placeholder="Mesaj Giriniz" rows="10" required class="form-control">
                        </textarea>
                        <input type="submit" value="Gönder">
                        </div>
                    <div id="adres">
                <h4 id="adresbaslik">Adres:</h4>
                        <p class="adresp">Yayla Mah.</p>
                        <p class="adresp">Fevzi Çakmak Caddesi</p>
                        <p class="adresp">Karaoğlan Sokak No:</p>
                        <p class="adresp">0216 111 11 11</p>
                <p class="adresp">Email : veritabanıödev@gmail.com</p>
                    </div>
                </div>
                <footer>
                <div id="copyright">2022 Tüm Hakları Saklıdır</div>
                    
                    <div id="socialfooter">
                        <a href=""><i class="fab fa-facebook-f social"></i></a>
                        <a href=""><i class="fab fa-google-plus-g social"></i></a>
                        <a href=""><i class="fab fa-twitter social"></i></a>
                    </div>
                    
                    
                    <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
                
                </footer>
                
                </div>
                
            
        
        
        
        </section>

        
        
        
        
        <script
  src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
  integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
  crossorigin="anonymous"></script>

<script src="owl/owl.carousel.min.js"></script>
        
        
        <script src="owl/script.js"></script>
    </body>
</html>