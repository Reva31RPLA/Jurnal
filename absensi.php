<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
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
        body {
            margin: 0;
            padding: 0;
            overflow-x:hidden;
            background-color: #2B2E4A;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #53354A;
            padding: 10px 20px;    
        }

        .logo img {
            max-width: 40px;
            height: auto;
            position:relative;
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
        #iduka {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
            width:252px;
            border-radius:5px;
            color:black;
        }
        input[type="radio"] {
            margin-bottom: 10px;
            margin-left:100px;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="dashboard.php">
                <img src="admin/img/smkn 8 malang.png" alt="Logo">
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
        <a href="profile.php"><i class="fa-sharp fa-solid fa-user"></i>  Profile</a>
        <a href="absensi.php"><i class="fa-sharp fa-solid fa-qrcode"></i>  Absensi</a>
        <a href="laporan.php"><i class="fa-sharp fa-solid fa-file-lines"></i> Laporan</a>
        <a href="konsul.php"><i class="fa-sharp fa-solid fa-comment"></i>  Tanggapan</a>
    </div>
    <div class="container mt-5">
    <h1 class="mb-4">Halaman Absensi</h1>
    <form>
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
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
        <label for="kehadiran">Kehadiran :</label>
        <br>
        <input type="radio" id="hadir" name="hadir" value="hadir">
        <label for="hadir">Hadir</label>
        <input type="radio" id="telat" name="telat" value="telat">
        <label for="telat">Terlambat</label>
        <input type="radio" id="alpha" name="alpha" value="alpha">
        <label for="alpha">Alpha</label>
        <input type="radio" id="izin" name="izin" value="izin">
        <label for="izin">Izin</label>
        <input type="radio" id="sakit" name="sakit" value="sakit">
        <label for="sakit">Sakit</label><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>