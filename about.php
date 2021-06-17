<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require('header.php');
  ?>

  <title>Tentang Kami</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Simulasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Training</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">Tentang Kami <span class="sr-only">(current)</span> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style='margin-top:90px'>
    <div class="row">
      <div class="col-12 mt-5">
        <center>
          <h2 class="tebal mb-5">Anggota Kelompok 3</h2>
        </center>
        <hr>

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/pp.png" alt="Card image cap">
              <div class="card-body">
                <center>
                  <p class="card-text">
                    <b>REZALDY RAFI</b><br>
                    1941720213
                  </p>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/pp.png" alt="Card image cap">
              <div class="card-body">
                <center>
                  <p class="card-text center">
                    <b>HARIST DANI HISYAM RISYALMAN</b><br>
                    1941720034
                  </p>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/pp.png" alt="Card image cap">
              <div class="card-body">
                <center>
                  <p class="card-text">
                    <b>FITRANZA AKBAR SARRAZIN</b><br>
                    1941720203
                  </p>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/pp.png" alt="Card image cap">
              <div class="card-body">
                <center>
                  <p class="card-text">
                    <b>MUHAMMAD HAJAR PRIATMAJA</b><br>
                    1941720224
                  </p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->

  <?php
  require('footer.php');
  ?>

  <script src="js/jquery.js"></script>

  <!-- validasi -->
  <script>
    $(document).ready(function() {
      $('.toggle').click(function() {
        $('ul').toggleClass('active');
      });
    });
  </script>
</body>

</html>