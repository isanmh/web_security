<?php

if (isset($_POST['submit'])) {

	$target_dir  = 'uploads/';
	$target_path = $target_dir . basename($_FILES['image']['name']);
	$uploadOk    = false;

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
		$uploadOk = true;
	} else {
		die("Upload gagal!");
	}

	if ($uploadOk) {
		echo "<p>Upload berhasil:</p>";
		echo "<img src='{$target_path}'>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Upload Gambar</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<p>Masukkan gambar:</p>
		<input type="file" name="image" accept="image/*" />
		<br />
		<br />
		<input type="submit" name="submit" />
	</form>
</body>

</html>