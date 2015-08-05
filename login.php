<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleregistr.css">
</head>
<body>
<div>
    <form action="class/action_login.php" method="post" id="form">
     
            
                <h2>ENTER</h2
                    <label for="user_login">Login:</label>
                    <input type="text" name="username" id="username" required>
                    <span></span>
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" id="pass" required>
                    <span></span>
              
                <input type="submit" name="login" class="button" value="Log In" />
            
            <p class="regtext">No account yet? <a href="registration.php" >Register Here</a>!</p>
            <p class="regtext">Forgot your password? <a href="lostpass.php" >Restore password here</a>!</p>
    </form>

</body>
</html>

