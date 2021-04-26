<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM data_mahasiswa"); // using mysqli_query instead
?>

<html>
<head>	
	<title>UTS-WS</title>
</head>

<body>
<a href="create.php">Add New Data</a><br/><br/>
<a href="xml.php">XML</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>No</td>
		<td>NPM</td>
		<td>Nama</td>
		<td>Jurusan</td>
		<td>Alamat</td>
		<td>Umur</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['No']."</td>";
		echo "<td>".$res['NPM']."</td>";
		echo "<td>".$res['Nama']."</td>";
		echo "<td>".$res['Jurusan']."</td>";
		echo "<td>".$res['Alamat']."</td>";
		echo "<td>".$res['Umur']."</td>";		
	}
	?>
	</table>
</body>
</html>