<?php
session_start();
include("include/db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("include/db_connect.php");
    include("functions/functions.php");
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = md5($_POST['pass']);
    $login = clear_string($_POST['login']);
    $pass = clear_string(md5($_POST['pass']));
    $result = mysqli_query($link, "SELECT * FROM users WHERE pass = '$pass' and login = '$login'");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['auth'] = true;
            header("Location: index.php");
        }
    } else {
        echo 'Логин и/или пароль неверный';
        ?>
        <a href="login.php" class="btn btn-primary" role="button" aria-disabled="true">Назад</a>
        <?php
    }
}
?>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>