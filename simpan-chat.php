<?php
//Include file koneksi ke database
include "konektor.php";

//menerima nilai
if (isset ($_POST["submit"])) {
    $nama=$_POST["name"];
    $email=$_POST["_replyto"];
    $pesan=$_POST["message"];
    $sql="insert into chat (nama,email,pesan) 
    values ('$nama','$email','$pesan')";

    $hasil=mysqli_query($con,$sql);
    if ($hasil) {
        echo "Pesan anda berhasil dikirim";
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="andre3.php";
              </script>';
        exit;
      }
    else {
        echo "Gagal simpan data anggota";
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="andre3.php";
              </script>';
              exit();
    }  
}
?>