<?php
include("include/db_connect.php");
session_start();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300|Play" rel="stylesheet">
</head>
<title>Главная</title>
<body>
<?php
if (!empty($_SESSION['auth'])) {
    ?>
    <div class="media ml-2 mt-2 img-rounded">
        <img class="avatar rounded-circle" src="/avatars/default.jpg" width="64" height="64"
             alt="Аватар">
        <div class="media-body">
            <h5 class="mt-3 ml-1"><?php echo 'Здравствуйте, ' . $_SESSION['login'] . '!'; ?></h5>
            <form action="exit.php">
                <input type="submit" name="exit1" id="exit" class="btn-danger rounded" value="Выйти">
            </form>
        </div>
    </div>
    <section class="first">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <h1 class="mx-auto text-white">Blog by Denis Teplyakov</h1>
            </div>
        </div>
    </section>
    <?php
} else {
    ?>
    <nav class="navigation navbar navbar-expand-lg navbar-dark text-white fixed-top">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Контакты</a>
                </li>
            </ul>
            <form action="registration.php">
                <input type="submit" class="btn btn-outline-light my-sm-0" value="Зарегистрироваться">
            </form>
            <form action="login.php">
                <input type="submit" class="btn btn-outline-light my-sm-0" value="Войти">
            </form>
        </div>
    </nav>
    <section class="first">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <h1 class="mx-auto text-white">Blog by Denis Teplyakov</h1>
            </div>
        </div>
    </section>
    <section id="main2">
        <div class="container text-center">
            <h1>Новости</h1>
            <div class="row text-center">
                <a name="news" class="new mx-auto">
                    <div class="col"><img src="https://img.icons8.com/ios/50/000000/topic.png"></div>
                    <div class="col"><?php echo $_GET["comment"] ?></div>
                </a>
            </div>
        </div>
    </section>
    <section id="postadd">
        <div class="container text-center">
            <form class="post mx-auto" name="post1" method="get" action="index.php">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Что расскажете?)</label>
                    <input type="text" name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"/>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </section>
    <footer>
        <a name="contacts"></a>
    </footer>
<?php }
if (isset($_POST['exit1']))
    session_destroy(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
