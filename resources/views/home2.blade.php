<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simpel Pare</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home2.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    <body>
    <div class ="container">
      <!--Header-->
      <div class = "header-box-blu">
        <img class= "poin" src= "{{ ('/img/poin.png ') }}">
        <p class ="jl"> Jl. Diponegoro No.37, Salatiga </p>
        <img class= "fb" src= "{{ ('/img/fb.png ') }}">
        <img class= "ig" src= "{{ ('/img/ig.png ') }}">
      <div class="box-abu"></div>
      </div>
      <!--//Header-->

      <!--Navbar-->
      <div class="nav-box">
            <img class= "salatiga" src= "{{ ('/img/salatiga.png') }}">
            <div class="nav-box-menu">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="nav1">&emsp;Beranda&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Formulir&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kategori&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Berita&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Vidio&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kontak&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kritik&Saran&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Diskusi</a>
                  </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
      </div>
      <!--//Navbar-->

      <!--carousel -->
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="7000">
            <img  class= "pare" src="{{ ('img/pare.png ') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
            
          <div class="carousel-item" data-bs-interval="7000">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>

          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <!--/carousel -->
      
      <!--Menu -->
      <!--Menu Login -->
      <div class="login-box">
        <img class= "login" src= "{{ ('img/login.png ') }}">
        <a class="txt-login" style="text-decoration:none;" href="{{ route('login') }}">{{ __('Profil') }}</a>
      </div>
      <!--//Menu Login -->
      
      <!--Menu registrasi -->
      <div class="register-box">
        <img class= "regis" src= "{{ ('img/regis.png ') }}">
        <a class="txt-register" style="text-decoration:none;"  href="{{ route('register') }}">{{ __('Registrasi Ekraf') }}</a>
      </div>
      <!--//Menu registrasi -->
      
      <!--Menu Kontak -->
      <div class="kontak-box">
        <img class= "login" src= "{{ ('img/kontak.png ') }}">
        <p class ="txt-kontak"> Kontak </p>
      </div>
      <!--//Menu -->

      <div class = "kreatif">
        <hr size="5px">
        <h1 id="scrollKreatif" class="h1" style="text-align:center">INDUSTRI KREATIF </h1>
        <hr size="5px">
      </div>

      <div class="container">
         <div class="row row-cols-4">
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Game.png ') }}">
             <p class="txt">Pengembangan Permainan</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Arsitektur.png ') }}">
            <p class="txt">Arsitektur</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Desain-Interior.png ') }}">
            <p class="txt">Desain Interior</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Musik.png ') }}">
            <p class="txt">Musik</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Seni-Rupa.png ') }}">
            <p class="txt">Seni Rupa</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Desain-Produk.png ') }}">
            <p class="txt">Desain Produk</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Fashion.png ') }}">
            <p class="txt">Fesyen</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Kuliner.png ') }}">
            <p class="txt">Kuliner</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Film.png ') }}">
            <p class="txt">Film, Animasi dan Vidio</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Fotografi.png ') }}">
            <p class="txt">Fotografi</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Desain-Visual.png ') }}">
            <p class="txt">Desain Visual</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Tv.png') }}">
            <p class="txt">Televisi dan Radio</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Seni-Kria.png ') }}">
            <p class="txt">Kria</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/iklan.png ') }}">
            <p class="txt">Perklanan</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/Seni-pertunjukan.png ') }}">
            <p class="txt">Seni Pertunjukan</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/penerbitan.png ') }}">
            <p class="txt">Penerbitan</p></br>
          </div>
          <div class="col">
            <img class= "bulat" src= "{{ ('/img/penerbitan.png ') }}">
            <p class="txt">Penerbitan</p></br>
          </div>
        </div>
      </div>
    
  </div>
  


     

    

  </div>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>       
    </body>

</html>