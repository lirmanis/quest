<?php
if (isset($_POST['button1'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];

    echo "<script>";
    echo "console.log('Username: " . $username . "');";
    echo "console.log('Password: " . $password . "');";
    echo "</script>";
}
?>
