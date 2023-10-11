<?php
$conn = mysqli_connect('localhost', 'root', '','db_jurnal');
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = "INSERT INTO `user` (`username`, `password`, `no_telp`, `level`) VALUES ('$username', '$password', '$telp', '$level')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo '<script>alert("Berhasil Register");window.location.href="login.php";</script>';
}

?>