<?php
require_once 'dbkoneksi.php';
// 4) definiskan query SQL
$sql = "SELECT * FROM pasien";

// 5) jalankan query
$rs = $dbh->query($sql);

// 6) populasi data hasil query
// foreach($rs as $row){
//     echo $row->kode." - ".$row->nama."<br>";
// }
?>

<h2>Daftar Pasein</h2>
<table border="1" width="100%">
    <thead>
        <th>No</th><th>Kode</th><th>Nama</th>
        <th>Jenis Kelamin</th><th>Tempat Lahir, Tanggal lahir</th>
        <th>Alamat</th><th>Email</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($rs as $row){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row->kode."</td>";
            echo "<td>".$row->nama."</td>";
            echo "<td>".$row->gender."</td>";
            echo "<td>".$row->tmp_lahir.", ".$row->tgl_lahir."</td>";
            echo "<td>".$row->alamat."</td>";
            echo "<td>".$row->email."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>