<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php 
  include "header.php";
 ?>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_tambah_mahasiswa.php" method="post">
      Nama :
      <input type="text" name="nama" value="" class="form-control">
      Tanggal Lahir :
      <input type="date" name="tanggal_lahir" value="" class="form-control"><br>
      Jenis Kelamin :
      <select name="jenis_kelamin" class="form-control">
        <option></option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
      Alamat :
	  <textarea name="alamat" class="form-control" rows="4"></textarea>
      Username :
      <input type="text" name="username" value="" class="form-control">
      Password :
      <input type="password" name="password" class="form-control">
      Jurusan :
      <select name="id_jurusan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'
                </option>';
                }
                ?>
      </select>

      <input type="submit" name="simpan" value="Tambah Data" class="btn btn-primary">
    </form>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>