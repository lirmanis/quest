<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>a
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include ("Sign.php")?>

<div class="container">
    <h1> Listless</h1>
    <div class ="loginbox">
        <div class="logintxt">
            <p>Login to your account</p>
        </div>
            <div class="info">
            <form class="form" method="post">
                <input class="usr" id="usr" type="text" name="uname" placeholder="Email" required>
                <input class="usr" id="psw" type="password" name="password" placeholder="Enter Password" required>

                <button type="submit" name="button1" class="SubButton">Sign in or Login</button>
            </form>
        </div>
    </div>
</div>   

</body>
</html>
