<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    // Define produk harga
    $harga = [
        "TV" => 4200000,
        "kulkas" => 3100000,
        "Mesin_Cuci" => 3800000
    ];

    $total_price = $harga[$produk] * $jumlah;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>
<body>
<form class="p-5" method="post" action="Tugas_Belanja_Online.php">
  <div class="row">
    <div class="col-md-8">
    <h1>Belanja Online</h1>
    <hr>
      <div class="form-group row ">
        <label for="customer" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="customer" name="customer" type="text" class="form-control" placeholder="Masukkan Nama Customer" required>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="produk" id="produk_0" type="Radio" class="custom-control-input" value="TV"> 
            <label for="produk_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="produk" id="produk_1" type="Radio" class="custom-control-input" value="kulkas"> 
            <label for="produk_1" class="custom-control-label">Kulkas</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="produk" id="produk_2" type="Radio" class="custom-control-input" value="Mesin_Cuci"> 
            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
          <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Jumlah">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-header bg-primary text-white">Daftar Harga</div>
      <ul class="list-group list-group-flush">
          <li class="list-group-item">TV : Rp 4.200.000</li>
          <li class="list-group-item">Kulkas : Rp 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : Rp 3.800.000</li>
      </ul>
      <div class="card-footer text-center bg-primary text-white">HARGA SEMAUNYA</div>
    </div>
  </div>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
  <div class="mt-3 p-3 border rounded">
    <p>Nama customer: <strong><?= htmlspecialchars($customer) ?></strong></p>
    <p>Produk Pilihan: <strong><?= htmlspecialchars($produk) ?></strong></p>
    <p>Jumlah Beli: <strong><?= htmlspecialchars($jumlah) ?></strong></p>
    <p>Total Belanja: <strong>Rp. <?= number_format($total_price, 0, ',', '.') ?></strong></p>
  </div>
<?php endif; ?>
</body>
</html>