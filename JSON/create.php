<?php

    require_once('koneksi.php');

    $NPM = $_POST['NPM'];
    $Nama = $_POST['Nama'];
    $Jurusan = $_POST['Jurusan'];
    $Alamat = $_POST['Alamat'];
    $Umur = $_POST['Umur'];
   

    $query = "INSERT INTO biodata_mahasiswa(NPM,Nama,Jurusan,Alamat,Umur)VALUES('$NPM','$Nama','$Jurusan','$Alamat','$Umur')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>