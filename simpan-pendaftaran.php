<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
if (isset ($_POST["submit"])) {
    $nama=$_POST["nama"];
    $posisi=$_POST["posisi"];
    $kelamin=$_POST["kelamin"];
    $pernikahan=$_POST["pernikahan"];
    $lulusan=$_POST["lulusan"];
    $tempat=$_POST["tempat"];
    $tanggal=$_POST["tanggal"];
    $berat=$_POST["berat"];
    $tinggi=$_POST["tinggi"];
    $alamat=$_POST["alamat"];
    $rt=$_POST["rt"];
    $rw=$_POST["rw"];
    $kecamatan=$_POST["kecamatan"];
    $kelurahan=$_POST["kelurahan"];
    $madya=$_POST["madya"];
    $provinsi=$_POST["provinsi"];
    $kode=$_POST["kode"];
    $telepon=$_POST["telepon"];
    $email=$_POST["email"];
    $sql="insert into registrasi (nama,posisi,kelamin,pernikahan,lulusan,tempat,tanggal,berat,tinggi,alamat,rt,rw,kecamatan,kelurahan,madya,provinsi,kode,telepon,email) 
    values ('$nama','$posisi','$kelamin','$pernikahan','$lulusan','$tempat','$tanggal','$berat','$tinggi','$alamat','$rt','$rw','$kecamatan','$kelurahan','$madya','$provinsi','$kode','$telepon','$email')";
    $hasil=mysqli_query($conn,$sql);
    if ($hasil) {
        echo "Berhasil simpan data anggota";
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
        exit;
      }
    else {
        echo "Gagal simpan data anggota";
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
    }  
}
?>