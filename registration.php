<?php
include("include/db_connect.php");
session_start();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="/js/validate.js"></script>
</head>
<title>Регистрация</title>
<body class="regi">
<div class="form mx-auto mt-5" style="width: 300px;">
    <form class="form-horizontal needs-validation" action="reg.php" method="POST" enctype="multipart/form-data"
          novalidate>
        <div class="form-group">
            <div class="form-group row">
                <label for="validationCustomUsername" class="col-sm-2 col-form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Введите имя" pattern="[A-Za-z0-9]{4,8}" class="form-control"
                           name="login"
                           id="validationCustomUsername"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Введите от 4 до 8 символов
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" placeholder="Введите email" class="form-control" name="email" id="email"
                           aria-describedby="inputGroupPrepend">
                    <div class="invalid-feedback">
                        Введите email
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" placeholder="Введите пароль" pattern=".{4,8}" class="form-control"
                           name="pass" id="pass1"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Введите от 4 до 8 символов
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pass2" class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" placeholder="Подтвердите пароль" class="form-control" name="pass2" id="pass2"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Не совпадает пароль
                    </div>
                </div>

            </div>
        </div>
        <div class="custom-file mb-4">
            <input type="file" class="custom-file-input" name="picture" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Выбрать аватар</label>
            <div class="invalid-feedback">
                Загрузите аватар
            </div>
        </div>
        <input class="btn btn-primary" type="submit" name="confirm" value="Зарегистрироваться">
    </form>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("pass1").onchange = validatePassword;
            document.getElementById("pass2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("pass2").value;
            var pass1 = document.getElementById("pass1").value;
            if (pass1 != pass2)
                document.getElementById("pass2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("pass2").setCustomValidity('');
//empty string means no validation error
        }
    </script>

</div>
</body>
</html>
