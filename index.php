<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <div class="wrap">
        <div class="container">
        <h2>Form Pendaftaran</h2>
        <form action="simpan-pendaftaran.php" method="post" autocomplete="off">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" required minlength="2" maxlength="30" ></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>:</td>
                <td>
                    <select name="posisi">
                        <option>-- Pilih Posisi --</option>
                        <option>Direktur utama</option>
                        <option>Direktur Keuangan</option>
                        <option>Direktur Personalia</option>                   
                        <option>CEO</option>
                        <option>Manager</option>
                        <option>Manager Pemasaran</option>
                        <option>Manager Pabrik</option>                   
                        <option>Staff</option>
                        <option>Administrasi</option>
                        <option>Divisi IT</option>                   
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="kelamin">
                        <option>-- Pilih Salah Satu --</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr class="kanan">
                <td>Status Pernikahan</td>
                <td>:</td>
                <td>
                <select name="pernikahan">
                        <option>-- Pilih Salah Satu --</option>
                        <option>Single</option>
                        <option>Menikah</option>
                    </select>
                </td>
            </tr>
            <tr class="kanan">
            <td>Pendidikan</td>
                <td>:</td>
                <td>
                <select name="lulusan">
                        <option>-- Pilih Salah Satu --</option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA/Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat" class="form-control" placeholder="Masukan Tempat Lahir Anda"  ></td>
            </tr>
            <tr class="kanan">
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal Lahir Anda" required ></td>
            </tr>
            <tr class="kanan">
                <td>Berat Badan (KG)</td>
                <td>:</td>
                <td><input type="number" name="berat" class="form-control" placeholder="Masukan Berat Badan Anda" required ></td>
            </tr>
            <tr>
                <td>Tinggi Badan (CM)</td>
                <td>:</td>
                <td><input type="number" name="tinggi" class="form-control" placeholder="Masukan Tinggi Badan Anda" required ></td>
            </tr>
            <tr>   
                <td>Alamat Domisili</td><br>
                <td>:</td>
                <td><textarea type="text" name="alamat" class="form-alamat" placeholder="Masukan Alamat Anda" required></textarea></td>          
            </tr>
            <tr>
                <td>RT</td>
                <td>:</td>
                <td><input type="tel" name="rt" class="form-control" placeholder="Masukan RT Anda" required  ></td>
            </tr>
            <tr>
                <td>RW</td>
                <td>:</td>
                <td><input type="tel" name="rw" class="form-control" placeholder="Masukan RW Anda" required></td>
            </tr>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td>:</td>
                <td><input type="text" name="kelurahan" class="form-control" placeholder="Masukan Kelurahan Anda" required ></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan Anda" required ></td>
            <tr>
                <td>Kota Madya</td>
                <td>:</td>
                <td><input type="text" name="madya" class="form-control" placeholder="Masukan Kota Madya Anda" required ></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><input type="text" name="provinsi" class="form-control" placeholder="Masukan Provinsi Anda" required ></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td><input type="tel" name="kode" class="form-control" placeholder="Masukan Kode Pos Anda" required pattern="^([1-9][0-9]{4}$" ></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="tel" name="telepon" class="form-control" placeholder="Masukan No Telepon Anda" required pattern="(\+62|62|0)8[1-9][0-9]{6,9}$" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" class="form-control" placeholder="Masukan Email Anda" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit"></input>
                </td>
            </tr>
        </table>
         </form>
    </div>
    </div>
</body>
</html>