<!-- Header -->
<?php include 'header.html'; ?>

<body> 
<div class="container" style="overflow: auto;">
        <div class="p-5 mt-4">
            <h4 style="font-size: 40px; font-weight: 700;">Break Even Calculator</h4>
            <img src="img/gambar1.png" class="mt-5 mb-5" style="display: block; margin: 0 auto;" alt="GambarRumus">
            <p>Break Even Point (BEP) dalam unit merupakan titik di mana total pendapatan sama dengan total biaya, sehingga tidak ada keuntungan atau kerugian. Dalam konteks ini, BEP dinyatakan dalam jumlah unit produk yang harus dijual agar biaya produksi dapat tertutupi sepenuhnya oleh pendapatan penjualan. Dengan mengetahui BEP dalam unit, perusahaan dapat mengestimasi jumlah penjualan minimum yang harus dicapai agar tidak mengalami kerugian. Selain itu, informasi ini juga dapat membantu dalam pengambilan keputusan terkait harga jual dan strategi pemasaran untuk mencapai target penjualan yang diinginkan.</p>
            <ul>
                <li>Fixed Cost: Biaya yang tidak berubah seiring dengan volume produksi atau penjualan.</li>
                <li>Variable Cost (VC): Biaya yang berubah seiring dengan volume produksi atau penjualan.</li>
                <li>Price per Unit (P): Harga jual satu unit produk.</li>
            </ul>
        </div>
    </div>

  
  <form action="page2.php" method="POST">
  <div class="container pb-5">
    <div class="rounded-4 custom-bg-color p-5 mt-3 mr-3 ml-3">
      <h4 style="font-size: 32px; font-weight: 600;">Break Even Calculator</h4>
      <div class="row">
  <div class="col mt-5">
  <span class="center">Fixed Costs</span>
    <input type="number" class="form-control" placeholder="Fixed Costs" name="fc">
  </div>
  <div class="col mt-5">
  <span class="center">Variable Costs (VC)</span>
    <input type="number" class="form-control" placeholder="Variable Costs" name="vc">
  </div>
  <div class="col mt-5">
  <span class="center">Price per Unit (P)</span>
    <input type="number" class="form-control" placeholder="Price per Unit" name="p">
  </div>
</div>
<div class="mt-5 my-4">
    <button type="submit" class="btn btn-primary btn-sm pl-5 pr-5 pt-2 pb-2 rounded-2">Hitung</button>
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