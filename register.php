<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTERJURNALSMKN8</title>
    <link rel="stylesheet" href="style.css">
</head>
<img class="img" src="admin/img/smkn 8 malang.png">
<style>
    body{
        background-color:#2B2E4A;
        color:rgb(255, 255, 255);
        background-size:cover;
    }
    h1{
        color:black;
    }
    label{
        color:black;
    }
    #submit {
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        background: #f30606;
    }
    #level {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
        width:252px;
        border-radius:5px;
        color:gray;
    }
    .container {
        height:500px;
        background-color:#53354A;
    }
    a {
        color:blue;
    }
    button {
        background-color:#fff;
        color:black;
    }
    button:hover {
        background:white;
    }
</style>
<body>
    <div class="container">
        <div class="login">
        <form method="post" action="save.php">
            <form action="">
                <h1>Register</h1>
                <hr>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="example">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <label for="phone">No.tlp</label>
                <input type="tel" name="telp" id="telp" placeholder="xxxx-xxxx-xxxx">
                <label for="level">Level</label>
                <select name="level" id="level">
                <option value="Guru">Guru</option>
                <option value="Siswa">Siswa</option>
                </select>
                <button input type="submit" id="submit">Register</button>
                <p><a href="login.php">Already Have Account?</a></p>
            </form>
        </div>
        </div>
    </div>
</body>
</html>


