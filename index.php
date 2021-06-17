<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require('header.php');
  ?>

  <title>FinPro ML</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Simulasi
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Training</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style='margin-top:90px'>
    <div class="row">
      <div class="col-12 mt-5">
        <h2 class="tebal">Naive Bayes</h2>
        <p class="desc mt-4"><a href="https://binus.ac.id/bandung/2019/12/algoritma-naive-bayes/">Naïve Bayes Classifier</a> merupakan sebuah metoda klasifikasi yang berakar pada teorema Bayes.
          Metode pengklasifikasian dengan menggunakan metode probabilitas dan statistik yg dikemukakan oleh ilmuwan Inggris Thomas Bayes,
          yaitu memprediksi peluang di masa depan berdasarkan pengalaman di masa sebelumnya sehingga dikenal sebagai Teorema Bayes.
          Ciri utama dr Naïve Bayes Classifier ini adalah asumsi yang sangat kuat (naïf) akan independensi dari masing-masing kondisi/kejadian.
          Menurut Olson Delen (2008) menjelaskan Naïve Bayes untuk setiap kelas keputusan, menghitung probabilitas dg syarat bahwa kelas keputusan adalah benar,
          mengingat vektor informasi obyek. Algoritma ini mengasumsikan bahwa atribut obyek adalah independen.
          Probabilitas yang terlibat dalam memproduksi perkiraan akhir dihitung sebagai jumlah frekuensi dari "master" tabel keputusan.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-4">
        <h3 class="tebal">Simulasi Probabilitas Diterimanya Di Indomaret Malang</h3>
      </div>

      <div class="col-6">
        <form method="POST" class="mt-3">

          <div class="form-group">
            <label for="umur">Umur :</label>
            <select name="umur" id="umur" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih umur anda--</option>
              <?php
              for ($i = 20; $i <= 25; $i++) {
                echo "<option value='$i'>$i</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Tinggi Badan :</label>
            <select name="tinggi" id="tinggi" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih tinggi--</option>
              <option value="kt">Kurang Tinggi ( < 150 cm - 159 cm )</option>
              <option value="ideal">Ideal ( 160 cm - 167 cm )</option>
              <option value="st">Sangat Tinggi ( >167 cm )</option>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Berat Badan :</label>
            <select name="beratB" id="beratB" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih berat badan--</option>
              <option value="kurus">Kurus ( < 50 kg - 55 kg )</option>
              <option value="ideal">Ideal ( 56 kg - 60 kg )</option>
              <option value="tambun">Tambun ( >61 kg )</option>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Status Kesehatan :</label>
            <select name="kesehatan" id="kesehatan" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih status kesehatan--</option>
              <option value="sehat">Sehat</option>
              <option value="tidak_sehat">Tidak Sehat</option>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Pendidikan :</label>
            <select name="pendidikan" id="pendidikan" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih pendidikan--</option>
              <option value="sma">SMA</option>
              <option value="smk">SMK</option>
              <option value="s1">S1</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary mt-3" id="dor" onclick="return simulasi()" />
          </div>

        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-5 mb-5">
        <div id="hasilSIM" style="margin-bottom:30px;">

        </div>
      </div>
    </div>

  </div>

  <?php
  require('footer.php');
  ?>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="jspopper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- validasi -->
  <script>
    $(document).ready(function() {
      $('.toggle').click(function() {
        $('ul').toggleClass('active');
      });
    });
  </script>

  <script>
    function simulasi() {
      var umur = $("#umur").val();
      var tinggi_badan = $("#tinggi").val();
      var berat_badan = $("#beratB").val();
      var status_kesehatan = $("#kesehatan").val();
      var pendidikan = $("#pendidikan").val();

      //validasi
      var um = document.getElementById("umur");
      var tb = document.getElementById("tinggi");
      var bb = document.getElementById("beratB");
      var sk = document.getElementById("kesehatan");
      var pp = document.getElementById("pendidikan");

      if (um.selectedIndex == 0) {
        alert("Umur Tidak Boleh Kosong");
        return false;
      }

      if (tb.selectedIndex == 0) {
        alert("Tinggi Badan Tidak Boleh Kosong");
        return false;
      }

      if (bb.selectedIndex == 0) {
        alert("Berat Badan Tidak Boleh Kosong");
        return false;
      }

      if (sk.selectedIndex == 0) {
        alert("Status Kesehatan Tidak Boleh Kosong");
        return false;
      }

      if (pp.selectedIndex == 0) {
        alert("Pendidikan Tidak Boleh Kosong");
        return false;
      }

      //batas validasi

      $.ajax({
        url: 'simulasi.php',
        type: 'POST',
        dataType: 'html',
        data: {
          umur: umur,
          tinggi_badan: tinggi_badan,
          berat_badan: berat_badan,
          status_kesehatan: status_kesehatan,
          pendidikan: pendidikan
        },
        success: function(data) {
          document.getElementById("hasilSIM").innerHTML = data;
        },
      });

      return false;

    }
  </script>

  <script>
    $(document).ready(function() {
      $('#dor').click(function() {
        $('html, body').animate({
          scrollTop: $("#hasilSIM").offset().top
        }, 500);
      });
    });
  </script>
</body>

</html>