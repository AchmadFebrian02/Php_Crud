<?php
  include 'koneksi.php';
  session_start();

  $query = "SELECT * FROM tb_mahasiswa;";
  $sql = mysqli_query($conn, $query);
  $no = 0;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
    <link href="DataTables/datatables.css" rel="stylesheet">
    <script type="text/javascript" src="DataTables/datatables.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#dt').DataTable({
          "lengthMenu" : [3,5,10,25,50,100]
        });
      });
    </script>

    <title>Data_Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: white;" href="#"> DATA MAHASISWA </a>
      </div>
    </nav>
    <!-- judul -->
    <div class="container">
      <h2 class="mt-4">Data Mahasiswa</h2>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data yang telah disimpan database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD<cite title="Source Title">create read updte delete</cite>
        </figcaption>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Tambah Data
      </a>

      <?php 
        if(isset($_SESSION['eksekusi'])):
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo $_SESSION['eksekusi']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
        session_destroy();
        endif;
      ?>
      <div class="table-responsive">
        <table id="dt" class="table align-middle table-striped table-bordered table-hover">
          <thead>
            <tr class="text-center bg-secondary" style="color: white;">
              <th>No.</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th>Fakultas</th>
              <th>Foto Mahasiswa</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              while($result = mysqli_fetch_assoc($sql)){
              ?>
            <tr>
              <td><center>

                <?php echo ++$no; ?>
              </td></center>
              <td><center><?php echo $result['nim']; ?></center></td>
              <td><?php echo $result['nama_mahasiswa']; ?></td>
              <td><?php echo $result['jenis_kelamin']; ?></td>
              <td><?php echo $result['fakultas']; ?></td>
              <td><center>
                <img src="./img/<?php echo $result['foto_mahasiswa']; ?>" style="width: 100px" />
                </center></td>
              <td><?php echo $result['alamat']; ?></td>
              <td>
                <a href="kelola.php?ubah=<?php echo $result['id_mahasiswa']; ?>" type="button" class="btn btn-success">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="proses.php?hapus=<?php echo $result['id_mahasiswa']; ?>" name= "aksi"type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingi menghapus data tersebut?')">
                  <i class="fa fa-trash"></i>
</a>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="mb-5"></div>
  </body>
</html>
