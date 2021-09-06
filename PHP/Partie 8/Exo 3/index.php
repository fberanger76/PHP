<?php
$userName = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));
$cookieName = "Login";
$cookiePass = "Password";
setcookie($cookieName, $userName, time() + (86400 * 30), "/");
setcookie($cookiePass, $password, time() + (86400 * 30), "/");
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>
<body>
    
<form action="index.php" method="POST">
 <p>Login : <input type="text" name="username" /></p>
 <p>Password : <input type="password" name="password" /></p>
 <p><input type="submit" value="Login"></p>
</form>

</body>
</html>