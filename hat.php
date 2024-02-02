<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форум проектов</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
<section class="hat">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-md-2">
                <a href="index.php">
                    <img class="hat-logo" src="img/fp-logo.png" alt="Форум проектов">
                </a>
            </div>
            <div class="hat-link-block offset-xl-1 col-xl-4 offset-md-1 col-md-4">
                <a class="hat-link" href="index.php#aboutUs">О нас</a>
                <a class="hat-link" href="projects.php">Проекты</a>
                <a class="hat-link" href="forums.php">Форум</a>
                <a class="hat-link" href="members.php">Участники</a>
            </div>
            <div class="offset-xl-1 col-xl-4 offset-md-0 col-md-5">
                <?php if (check_auth()) { ?>
                    <a href="profile.php" type="button" class="btn button-1 hat-btn">ПРОФИЛЬ</a>
                    <a href="do_logout.php" type="button" class="btn button-1 hat-btn">ВЫЙТИ</a>
                <?php } else { ?>
                    <a href="signIn.php" type="button" class="btn button-1 hat-btn">ВОЙТИ</a>
                    <a href="signUp.php" type="button" class="btn button-1 hat-btn">РЕГИСТРАЦИЯ</a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
</body>
</html>
