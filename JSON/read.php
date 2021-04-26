<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM biodata_mahasiswa";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'NPM' => $row ['NPM'],
                'Nama' => $row['Nama'],
                'Jurusan' => $row['Jurusan'],
                'Alamat' => $row['Alamat'],
                'Umur' => $row['Umur'],
            ) );
        }
        
    
    echo json_encode ( array('Biodata Mahasiswa' => $result) );
    }
?>