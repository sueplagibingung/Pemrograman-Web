<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

$jurusan = array('TEKNIK INFORMATIKA','TEKNIK MESIN','TEKNIK KIMIA',
'TEKNIK SIPIL','TEKNIK ARSITEKTUR','TEKNIK KEDOKTERAN','TEKNIK NUKLIR','TEKNIK INDUSTRI','FARMASI');

function active_radio_button($value,$input){
    $result = $value == $input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
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
        /* .back{
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer; 
            font-size: 6px;
        } */
        p{
            font-size:20px;
        }
        table{
            margin-left:auto;
            margin-right:auto;
            width: center;
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
            
        input {
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 600px; 
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        form label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea,
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('https://cdn.iconscout.com/icon/free/png-256/dropdown-arrow-1767523-1496439.png');
            background-repeat: no-repeat;
            background-position: right 10px center;
            cursor: pointer;
        }
        button{
            background-color: #4caf50;
            color: white;
            padding: 10px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .back{
            color:white;
            border-radius:4px;
            text-decoration:none;
            padding:10px 15px;
            background-color:red;
        }
        form button:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>
    <header>
            <h1>FORM EDIT MAHASISWA</h1>
            <h5>Pastikan Mengubah Data Dengan Bijak Dan Teliti</h5>
    </header>
    <nav>
        <a href="index-admin.php">HOME</a>
        <a href="list-mahasiswa.php">MAHASISWA</a>
        <a href="index.php">LOGOUT</a>
    </nav>
    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_mhs'];?>"name="id_mhs">
        <table>
            <tr>
                <td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>"name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>"name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                <input type="radio" name="jenis_kelamin" value="L"<?php echo active_radio_button("L",$row['jenis_kelamin'])?>>Laki-Laki
                <input type="radio" name="jenis_kelamin" value="P"<?php echo active_radio_button("P",$row['jenis_kelamin'])?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan">
                        <?php
                        foreach($jurusan as $j){
                            echo "<option value='$j'";
                            echo $row['jurusan']==$j?'selected="selected"':'';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan" class='simpan'>Simpan</button>
                    <a href="list-mahasiswa.php" class = 'back'>Kembali</a>
                    
                </td>
            </tr>
        </table>
    </form>
</body>
</html>