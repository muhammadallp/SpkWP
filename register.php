<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login form</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="main-container">
    <div class="container">
      <div class="upper box">
        <h1>Register</h1>
        <h6>To access your login</h6>
      </div>
      <div class="lower box">
     <form>
       <div class="input">
   <input type="text" name="username" autocomplete="off" id="username" required/>
        <label for="username">
         Username
        </label>
      </div>
      <div class="input">
        <input type="text" name="nama" id="nama" required/>
        <label for="fullname">
          Full Name
        </label>
      </div>
      <div class="input">
        <input type="text" name="nohp" id="nohp" required/>
        <label for="password">
          No Handphone
        </label>
      </div>
      <div class="input">
        <input type="password" name="password" id="password" required/>
        <label for="password">
          Password
        </label>
      </div>
      <div class="input">
        <input type="password" name="confirm" id="inputPasswordConfirm" required/>
        <label for="inputPasswordConfirm">
          confirm password
        </label>
      </div>
          <input type="submit" value="Register" class="login-btn">
      	<a href="login.php"> Have an account? Go to login</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>