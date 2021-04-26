<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="create.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NPM</td>
				<td><input type="text" name="NPM"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="Jurusan"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
            <td>Umur</td>
				<td><input type="text" name="Umur"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>