<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
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
            margin-right:250px;
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
        table .no {
            width:40px;
        }
        table .tgl  {
            width:150px;
        }
        table .nama {
            width:300px;
        }
        table .iduka {
            width:250px;
        }
        table {
            width:100%;
            border-collapse: collapse;
            margin-left:250px;
            bottom:55px;
            position:relative;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
            color:#fff;
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
        <a href="datasiswa.php"><i class="fa-sharp fa-solid fa-user"></i>  Data Siswa</a>
        <a href="dataabsensi.php"><i class="fa-sharp fa-solid fa-qrcode"></i>  Data Absensi</a>
        <a href="datalaporan.php"><i class="fa-sharp fa-solid fa-file-lines"></i> Data Laporan</a>
        <a href="tanggapan.php"><i class="fa-sharp fa-solid fa-comment"></i>  Tanggapan</a>
    </div>
    <h1>Data Siswa</h1>
    <table>
        <thead>
            <tr>
                <th class="no">No.</th>
                <th class="nama">Nama</th>
                <th class="tgl">Tanggal</th>
                <th class="iduka">Nama IDUKA</th>
                <th>Laporan</th>
            </tr>
        </thead>
        <tbody id="data-siswa">
        </tbody>
    </table>
</body>
</html>