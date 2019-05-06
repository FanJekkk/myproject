<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="/js/validate.js"></script>
</head>
<?php
include("include/db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES['picture']['name'];
    $tmp_image = $_FILES['picture']['tmp_name'];
    move_uploaded_file($tmp_image, "avatars/" . $image);
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $query = "SELECT COUNT(*) FROM users WHERE login='$login'";
    $num = mysqli_query($link, $query);
    if ($num == 1) {
        echo '<div class="text-center">Логин и/или email занят.
        <br/>
        <a href="registration.php"><input class="btn btn-success" value="Исправить"></a></div>';
    } else {
        echo '
<div class="mx-auto" style="width: 300px;">
<a href="login.php"><input type="submit" class="btn btn-success mb-2 mt-2" value="Войти"></a>
 <div class="alert alert-success hidden" id="success-alert""> <h2>Успех</h2> <div>Вы успешно зарегистрировались, для входа в личный кабент нажмите на кнопку "Войти".</div> </div>
 </div>';
        mysqli_query($link, "INSERT INTO users(login, email, pass, image) VALUES(
        '" . $login . "',
        '" . $email . "',
        '" . $pass . "',
        '" . $image . "'
    )");
    }
}
?>

</html>
