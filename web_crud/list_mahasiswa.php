<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
    <style>
            body{
                background-color:#ffffff;
            }
            header{
                text-align:center;
                background-color:#000000;
                color:#ffffff;
                margin-top:-15px;
                margin-left:-15px;
                margin-right:-15px;
                padding:20px 10px;
            }
            h2{
                color: black;
                text-align:center;
            }
            table{
                margin-left:auto;
                margin-right:auto;
                width: 50%;
            }
            nav{
                padding:20px;
                border:1px solid black;
                margin-left:-10px;
                margin-right:-10px;
            }
            nav a{
                text-decoration:none;
                color:black;
                margin-right:25px;
            }
            a{  
                text-decoration:none;
                color:black;
                margin-right:25px;
            }
    </style>
</head>
<body>
    <header>
            <h1>LIST IDENTITAS MAHASISWA</h1>
            <h5>Pastikan Mengubah Data Dengan Bijak Dan Teliti</h5>
    </header>
    <nav>
        <a href="index-user.php">HOME</a>
        <a href="list_mahasiswa.php">MAHASISWA</a>
        <a href="index.php">LOGOUT</a>
    </nav>
    <br>
    <table border = "1">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
    </tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no = 1;
    foreach($mahasiswa as $row) {
        $jenis_kelamin = $row['jenis_kelamin'] == 'P'?'Perempuan':'Laki-Laki';
        echo "<tr>
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
                <td>".$row['alamat']."</td>
                </tr>";
        $no++;
    }
    ?>
</table>    
</body>
</html>
