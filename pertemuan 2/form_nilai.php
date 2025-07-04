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
    <h2 style="text-align: center; margin-top: 10px;">Form nilai mahasiswa</h2>

<?php
    $ar_matkul = [
        "DDP" => "Dasar-Dasar Pemrograman",
        "WEB1" => "Pemrograman Web",
        "WEB2" => "Desain Web",
        "BD" => "Basis Data",
        "SB" => "Statistik dan Probabilitas",
        "AI" => "Kecerdasan Buatan",
        "JK" => "Jaringan Komputer",
        "UI/UX" => "Desain UI/UX"
    ];
?>

<form style="padding: 50px;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--pilih matkul--</option>
    <?php
        foreach ($ar_matkul as $key => $value) {
            echo '<option value="'.$key.'">'.$value.'</option>';
        }
    ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];
?>

Nama mahasiswa: <?php echo $_nama; ?><br>
Mata kuliah: <?php echo $ar_matkul[$_matkul]; ?><br>  
Nilai UTS: <?php echo $_nilai_uts; ?><br>
Nilai UAS: <?php echo $_nilai_uas; ?><br>
Nilai Tugas: <?php echo $_nilai_tugas; ?><br>

<?php
}
?>
</body>
</html>
