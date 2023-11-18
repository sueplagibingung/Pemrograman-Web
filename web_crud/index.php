<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            form {
                max-width: 400px; 
                margin: 20px auto;
                padding:10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
            form input[type="password"],
            form input[type="text"],
            form textarea {
                width: 215%;
                padding: 10px;
                margin-bottom: 15px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            form button {
                background-color: #4caf50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-bottom:5px;
            }
            form button:hover {
                background-color: #45a049;
            }
            label{
                font-size:20px;
            }
            form a{
                text-decoration:none;
                background-color: #1640D6;
                color: white;
                padding: 5px 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            form a:hover{
                background-color:#001B79;
            }
            
        </style>
</head>
<body>
    <header>
        <h1>Universitas GatauNamaneApa</h1>
        <h5>Let's Join Us</h5>
    </header>
    <br>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username</label></td> 
            </tr>
            <tr>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
        <br>
            <tr>
                <td><label for="password">Password</label></td>
            </tr>
            <tr>
                <td><input type="password" id="password" name="password" required><br></td>
            </tr>
            <tr>
                <td><button type="submit" value="Login">LOGIN</td>
            </tr>
            <tr>
                <td><a href="form-signup.php">Sign Up</a></td>
            </tr>
        </table>    
    </table>   
    </form>
    
</body>
</html>