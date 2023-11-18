<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        p{
            font-size:20px;
        }
        table{
            margin-left:25%;
            margin: right 25%;
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
        form button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>
    <header>
    <h1>Universitas GatauNamaneApa</h1>
        <h5>Let's Join Us</h5>
    </header>
    <form method="post" action = "sign-up.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name = "nim" required></td></tr>
                <tr><td>NAMA</td><td><input type="text" name = "nama" required></td></tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value = "L" required>Laki-Laki
                        <input type="radio" name="jenis_kelamin" value = "P" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>
                        <select name="jurusan" >
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                            <option value="TEKNIK SIPIL">TEKNIK SIPIL</option>
                            <option value="TEKNIK ARSITEKTUR">TEKNIK ARSITEKTUR</option>
                            <option value="TEKNIK KEDOKTERAN">TEKNIK KEDOKTERAN</option>
                            <option value="TEKNIK NUKLIR">TEKNIK NUKLIR</option>
                            <option value="TEKNIK INDUSTRI">TEKNIK INDUSTRI</option>
                            <option value="FARMASI">FARMASI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name = "alamat" required></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name = "password" required></td>
                </tr>
                <tr>
                    <td colspan = "2"><button type = "submit" value = "simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>    
</body>
</html>
