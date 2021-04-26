<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "data_mahasiswa") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM biodata_mahasiswa ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('biodata_mahasiswa');
    $track->addChild('No', $row['No']);
    $track->addChild('NPM', $row['NPM']);
    $track->addChild('Nama', $row['Nama']);
    $track->addChild('Jurusan', $row['Jurusan']);
    $track->addChild('Alamat', $row['Alamat']);
    $track->addChild('Umur', $row['Umur']);
   
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>