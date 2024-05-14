<?php
  include 'koneksi.php';

  function tambah_data ($data, $files){
    $nim = $data['nim'];
    $nama_mahasiswa = $data ['nama_mahasiswa'];
    $jenis_kelamin = $data ['jenis_kelamin'];
    $fakultas = $data['fakultas'];

    $split = explode('.', $files['foto']['name']);

    $extensi = $split[count($split)-1];

    $foto = $nim.'.'.$extensi;
    $alamat = $data ['alamat'];

    $dir = "./img/";
    $tmpFile = $files['foto']['tmp_name'];

    move_uploaded_file($tmpFile, $dir.$foto);

    $query = "INSERT INTO tb_mahasiswa VALUES(null, '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$fakultas', '$foto', '$alamat')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  }

  function ubah_data ($data, $files){
  
    $id_mahasiswa = $data['id_mahasiswa'];
    $nim = $data['nim'];
    $nama_mahasiswa = $data ['nama_mahasiswa'];
    $jenis_kelamin = $data ['jenis_kelamin'];
    $fakultas = $data ['fakultas'];
    $alamat = $data ['alamat'];

    $queryShow = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if($files['foto']['name'] == ""){
     $foto = $result['foto_mahasiswa'];
    } else {

      
      $split = explode('.', $files['foto']['name']);
      $extensi = $split[count($split)-1];
      
      $foto = $result['nim'].'.'.$extensi;
      unlink("img/" .$result['foto_mahasiswa']);
      move_uploaded_file($files['foto']['tmp_name'], 'img/'.$foto);
    }

    $query = "UPDATE tb_mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin', fakultas= '$fakultas', alamat='$alamat', foto_mahasiswa='$foto' WHERE id_mahasiswa='$id_mahasiswa';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  }

  function hapus_data($data){
    $id_mahasiswa = $_GET['hapus'];

    $queryShow = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("./img/" .$result['foto_mahasiswa']);


    $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  
  }

?>
