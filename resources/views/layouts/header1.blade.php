<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simpel Pare</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/header1.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
    <body> 
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
                      <a class="nav-link active" aria-current="page" href="/home1">&emsp;Beranda&emsp;</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('home1#scrollBerita') }}">Berita&emsp;</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('home1#scrollVidio') }}">Vidio&emsp;</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('home1#scrollKontak') }}">Kontak</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
      </div>
      <!--//Navbar-->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>       
    </body>
</html>