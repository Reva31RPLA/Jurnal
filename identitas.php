<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDENTITAS SISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-image: url('img/smkn8.jpeg');
        color:rgb(255, 255, 255);
        background-size:cover;
    }
    h1{
        color:#f70303
    }
    label{
        color:crimson;
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
    #jenis {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
        width:252px;
        border-radius:5px;
        color:gray;
    }
    .container {
        height: auto;
    }
    
</style>
<body>
    <div class="container">
        <div class="login">
        <form method="post" action="identitas1.php">  
            <form action="">
                <h1>identitas</h1>
                <hr>
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" placeholder="example">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" placeholder="Kelas">
                <label for="nis">Nomor Induk Siswa</label>
                <input type="int" name="nis" id="nis" placeholder="NIS">
                <label for="jenis">Jenis Kelamin</label>
                <select name="jenis" id="jenis">
                <option value="laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option></select>
                <label for="ttl">Tempat,Tanggal Lahir</label>
                <input type="text" name="ttl" id="ttl" placeholder="example,01-01-2000">
                <label for="tel">No.HP</label>
                <input type="text" name="telp" id="telp" placeholder="xxxx-xxxx-xxxx">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat">
                <button input type="submit" id="submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>


