<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tanggapan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #2B2E4A;
            font-family:sans-serif;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            padding-top: 20px;
            margin-top:60px;
            background-color: #903749;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #dcdcdc;
        }
        .container {
            margin-left:300px;
            color:#fff;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #53354A;
            padding: 10px 20px;    
        }
        .text h5 {
            position:relative;
            color:#fff;
            font-family:Libre Baskerville;
            right:530px;
            top:5px;
        }
        .logo img {
            max-width: 40px;
            height: auto;
            position:relative;
        }
        #iduka {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
            width:252px;
            border-radius:5px;
            color:black;
        }
        .text h5 {
            position:relative;
            color:#fff;
            font-family:Libre Baskerville;
            right:530px;
            top:5px;
        }
        .login a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border: 2px solid #fff;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .login a:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="dashboard.php">
                <img src="img/smkn 8 malang.png" alt="Logo">
            </a>
        </div>
        <div class="text">
            <h5>JURNAL PKL
                SMKN 8 MALANG
            </h5>    
        </div>
        <div class="login">
            <a href="login.php">Login</a>
        </div>
    </nav>
    <div class="sidebar">
        <a href="datasiswa.php"><i class="fa-sharp fa-solid fa-user"></i>   Data Siswa</a>
        <a href="dataabsensi.php"><i class="fa-sharp fa-solid fa-qrcode"></i>   Data Absensi</a>
        <a href="datalaporan.php"><i class="fa-sharp fa-solid fa-file-lines"></i>   Data Laporan</a>
        <a href="tanggapan.php"><i class="fa-sharp fa-solid fa-comment"></i>    Tanggapan</a>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Halaman Tanggapan</h1>
    <form>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="nama">Nama IDUKA</label>
                <select name="iduka" id="iduka">
                <option value="Rakryan" placeholder="-Pilih-">Rakryan</option>
                <option value="Agrindo">Agrindo</option>
                <option value="Madanifarm">Madani Farm</option>
                </select>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input type="date" class="form-control" id="tgl">
        </div>
        <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea class="form-control" id="pesan" rows="5" placeholder="Tulis tanggapan atau pesan Anda"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
