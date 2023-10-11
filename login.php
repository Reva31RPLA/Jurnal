<?php
session_start();
$conn = new mysqli("localhost", "root", " ", "db_jurnal");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_level'] = $user['level'];
        if ($user['level'] == 'Guru') {
            header('Location: admin/dashboard.php');
            exit();
        } else {
            header('Location: dashboard.php');
            exit();
        }
    } else {
        echo "Password salah!";
    }
} else {
    echo "Pengguna tidak ditemukan!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGINJURNALSMKN8</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-color:#2B2E4A;
        color:rgb(241, 7, 7);
        background-size: cover;
    }
    h1{
        color:black;
    }
    label{
        color:black;
    }
    .container {
        background-color:#53354A;
    }
    button {
        background-color:#fff;
        color:black;
    }
    button:hover {
        background:white;
    }
    a {
        color:blue;
    }
    span {
        color:white;
    }
</style>
<body>
    <img class="img" src="admin/img/smkn 8 malang.png">
    <div class="container">
        <div class="login">
            <form method="post" action="">
                <h1>Login</h1>
                <hr>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="example@gmail.com" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>
                    <span>Tidak Punya Akun?  </span><a href="register.php">Buat Akun!</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>