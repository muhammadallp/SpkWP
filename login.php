<?php
    session_start();

    if(isset($_SESSION['level']))
    {
        header('location:index.php');
  
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

    <div class="main-container">
        <div class="container">
            <div class="upper box">
                <h1>Login</h1>
                <h6>To acces your dashboard</h6>
            </div>
            <div class="lower box">
                <form method="post" action="aksi_Login.php">
                    <div class="input">
                        <input type="text" name="username" id="username" required />
                        <label for="usename">
                            username
                        </label>
                    </div>
                    <div class="input">
                        <input type="password" name="password" id="password" required />
                        <label for="password">
                            password
                        </label>
                    </div>
                    <input type="submit" value="Login" class="login-btn">
                    <a href="register.php"> Have an account? Go to login</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>