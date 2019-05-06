<?php
include("include/db_connect.php");
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="/js/validate.js"></script>
</head>
<body class="regi">
<div class="form mx-auto mt-5" style="width: 300px;">
    <form class="form-horizontal needs-validation" action="check_login.php" method="POST" novalidate>
        <div class="form-group">
            <div class="form-group">
                <label for="validationCustomUsername" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Введите логин" class="form-control" name="login" id="validationCustomUsername"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Введите имя пользователя
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustompass" class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" placeholder="Введите пароль" class="form-control" name="pass" id="validationCustompass"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Введите пароль
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mb-2" value="Войти">
    </form>
    <form action="registration.php">
        <input type="submit" class="btn btn-primary mb-2" value="Зарегистрироваться">
    </form>
</div>
</body>
</html>

