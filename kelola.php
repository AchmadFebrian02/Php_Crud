<!DOCTYPE html>
<?php
        include 'koneksi.php';  
        {
          $id_mahasiswa ='';
          $nim = '';
          $nama_mahasiswa = '';
          $jenis_kelamin = '';
          $fakultas = '';
          $alamat = '';

          }
          if(isset($_GET['ubah'])) {
          $id_mahasiswa = $_GET['ubah'];
          
          $query = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
          $sql = mysqli_query($conn, $query);

          $result = mysqli_fetch_assoc($sql);
          
          $nim = $result['nim'];
          $nama_mahasiswa = $result['nama_mahasiswa'];
          $jenis_kelamin = $result['jenis_kelamin'];
          $fakultas = $result['fakultas'];
          $alamat = $result['alamat'];

          // var_dump($result);

          // die();
          }
        ?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
    <title>Data_Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-danger mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: white;" href="#"> DATA MAHASISWA </a>
      </div>
    </nav>
    <div class="container">
    <?php
          if(isset($_GET['ubah'])) {
        ?>
          <h2 class="mt-4">Perubahan Data mahasiswa</h2>
        <?php
          } else {
        ?>
        <h2 class="mt-4">Tambahkan Data Mahasiswa</h2>
        <?php
        }
        ?>
      <figure>
        <blockquote class="blockquote">
        <?php
          if(isset($_GET['ubah'])) {
        ?>
          <p>Silahkan Perbaruhi Database Mahasiswa</p>
        <?php
          } else {
        ?>
        <p>Silahkan Tambahkan Database Mahasiswa</p>
        <?php
        }
        ?>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD<cite title="Source Title">create read updte delete</cite>
        </figcaption>
      </figure>
     <form method="POST" action="proses.php" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $id_mahasiswa; ?>" name="id_mahasiswa">
       <div class="mb-3 row">
        <label for="nim"  class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
          <input  
            type="text"
            name="nim"
            class="form-control"
            id="nim"
            placeholder="ex: 12345678"
            value="<?php echo $nim ?>"
          />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama"  class="col-sm-2 col-form-label">Nama_Mahasiswa</label>
        <div class="col-sm-10">
          <input
            type="text"
            name="nama_mahasiswa"
            class="form-control"
            id="nama"
            placeholder="ex: Mefia"
            value="<?php echo $nama_mahasiswa ?>"
          />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jkel" class="col-sm-2 col-form-label">jenis_kelamin</label>
        <div class="col-sm-10">
          <select
            name="jenis_kelamin"
            id="jkel"
            class="form-select"
            aria-label="Default select example"
          >
            <option <?php if($jenis_kelamin == 'Laki-laki'){echo "selected";}?> value="Laki-laki">Laki-Laki</option>
            <option <?php if($jenis_kelamin == 'Perempuan'){echo "selected";}?> value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
        <div class="col-sm-10">
          <input type="text" name="fakultas" class="form-control" id="fakultas" 
          value="<?php echo $fakultas ?>"/>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label form-label"
          >Foto Mahasiswa</label
        >
        <div class="col-sm-10">
          <input <?php if(!isset($_GET['ubah'])){echo "required";} ?> class="form-control" type="file" name="foto" id="foto" accept="image/*"/>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $alamat ?></textarea>
        </div>
      </div>

      <div class="mb-3 row">
        <div class="col">
        <?php
          if(isset($_GET['ubah'])) {
        ?>
          <button type="submit" name="aksi" value="edit" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> simpan Perubahan
          </button>
        <?php
          } else {
        ?>
        <button type="submit" name="aksi" value="add" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
          </button>
        <?php
        }
        ?>
          <a href="index.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i> Batal
          </a>
        </div>
      </div></form>
    </div>
  </body>
</html>
