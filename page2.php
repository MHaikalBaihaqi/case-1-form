<!-- Header -->
<?php include 'header.html'; ?>

<body>
    <!-- form -->
    <form action="page1.php" method="POST">
    <div class="container pb-5" style="overflow: auto;">
    <div class="rounded-4 custom-bg-color p-5 mt-5">
      <h4 class="text-center" style="font-size: 32px; font-weight: 600;">Break Even Calculator</h4>
      <div class="row">
      <div class="col-md-8 offset-md-2">
  <div class="form-group pt-5">
    <label for="breakEvenPoint" style="font-size: 16px; font-weight: 700;">Break Even Point (in units)</label>
    <!-- Menampilkan hasil BEP -->
    <p id="breakEvenPoint" class="form-control"><?php 
    if (isset($_POST['fc'], $_POST['p'], $_POST['vc'])) { 
      $FC = $_POST['fc'];
      $P =$_POST['p'];
      $VC = $_POST['vc'];
      $breakEvenPointOperation = "$FC / ($P - $VC)"; 
    }
      echo $breakEvenPointOperation; ?></p>
  </div>
  <div class="form-group pt-4">
    <label for="exampleInputPassword1" style="font-size: 16px; font-weight: 700;">Hasil</label>
    <!-- Menampilkan hasil -->
    <p id="result" class="form-control"><?php 
    if (isset($_POST['fc'], $_POST['p'], $_POST['vc'])) { 
            $FC = $_POST['fc'];
            $P =$_POST['p'];
            $VC = $_POST['vc'];
            $hasil = $FC / ($P - $VC);
    }
        echo $hasil; ?></p>
  </div>
  </div>
  </div>
  <div class="text-center mt-5 my-4">
    <a href="page1.php" class="btn btn-primary btn-sm pl-5 pr-5 pt-2 pb-2 rounded-2">Kembali</a>
  </div>
  </div>
  </div>
</form>



<!-- Footer -->
<?php include 'footer.html'; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



