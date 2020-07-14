<?php
//gambar gambar
$background_bawah_navbar="abstract-black-luxury-fabric-background-with-copy-space_46250-2302.jpg";
$gambar_galeri="asd.jpg";
$gambar_daftar_menu="menu_list.jpg";
$logo_atas="asd.jpg";
 ?>
<!doctype html>
<html lang="en" id="home">
  <head>
    <link rel="shortcut icon" type="image/png" href="<?php echo $logo_atas; ?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ICWR-TECH | Halaman sederhana</title>
    <style>
    @media screen and (min-width: 450px) {
       .maps{
           width: 500px;
           height: 500px;
       }
    }
    @media screen and (min-width: 550px) {
      .maps{
          width: 500px;
          height: 500px;
      }
    }

    @media screen and (min-width: 800px) {
      .maps{
          width: 1000px;
          height: 500px;
      }
    }
    html{
      scroll-behavior: smooth;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M11.03 2.59a1.5 1.5 0 011.94 0l7.5 6.363a1.5 1.5 0 01.53 1.144V19.5a1.5 1.5 0 01-1.5 1.5h-5.75a.75.75 0 01-.75-.75V14h-2v6.25a.75.75 0 01-.75.75H4.5A1.5 1.5 0 013 19.5v-9.403c0-.44.194-.859.53-1.144l7.5-6.363zM12 3.734l-7.5 6.363V19.5h5v-6.25a.75.75 0 01.75-.75h3.5a.75.75 0 01.75.75v6.25h5v-9.403L12 3.734z"></path></svg></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#foodlist">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Daftar menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#address">Alamat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-4" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo $background_bawah_navbar; ?>" class="d-block w-100" alt="Background photo created by freepik - www.freepik.com">
        </div>
      </div>
    </div>
    <section class="bg-light" id="foodlist">
      <br><br><br>
      <div class="mt-2 text-center">
        <h2>Galeri</h2>
        <hr style="width:250px;border-top:2px solid #999;">
        <br>
          <div class="container">
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <br><br>
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_galeri; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
          </div>
      </div>
      <br><br><br><br><br>
    </section>
      <section class="bg-transparent" id="gallery">
        <br><br><br>
        <div class="mt-2 text-center">
          <h2>Daftar menu</h2>
          <hr style="width:250px;border-top:2px solid #999;">
          <br>
          <div class="container">
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <br><br>
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
            <img src="<?php echo $gambar_daftar_menu; ?>" alt="source: get.pxhere.com" width="300px" class="img-thumbnail">
          </div>
        </div>
        <br><br><br><br><br>
      </section>
      <section class="bg-light" id="address">
        <br><br><br>
        <div class="mt-2 text-center">
          <h2 class="">Alamat</h2>
          <hr style="width:250px;border-top:2px solid #999;">
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.3352011641514!2d106.82512583289173!3d-6.174861683070588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2db8c5617%3A0x4e446b7ac891d847!2sMonas%2C%20Gambir%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1594709925470!5m2!1sid!2sid" height="300px" class="maps" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <br><br><br><br><br>
        </div>
        <br><br>
      </section>
      <footer class="bg-secondary">
        <div class=" text-white">
          <br><br>
          <h6 class="text-dark text-center">Ora onok hak-hak an:)</h6>
        </div>
        <br>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
