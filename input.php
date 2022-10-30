<?php
  require_once 'koneksi.php';

  $nama=$_POST['nama'];
  $ucapan=$_POST['ucapan'];

  if ($nama==null || $ucapan==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='undangan.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO octa (nama, ucapan)
    values ('$nama', '$ucapan')");
    echo "<script>window.location='undangan.php'</script>";
  }
 ?>
