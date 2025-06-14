<?php
require_once 'templates/auth_check.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Личный кабинет</h2>
    <p>Добро пожаловать, <?php echo $_SESSION['user_name']; ?>!</p>

    <div class="row">
        <div class="col-md-6">
            <a href="history.php" class="btn btn-primary">История расчетов</a>
        </div>
        <div class="col-md-6">
            <a href="change_profile.php" class="btn btn-info">Изменить профиль</a>
        </div>
        <div class="col-md-6 mt-3">
            <a href="change_password.php" class="btn btn-warning">Сменить пароль</a>
        </div>
        <div class="col-md-6 mt-3">
            <a href="logout.php" class="btn btn-danger">Выйти</a>
        </div>
    </div>
</div>
</body>
</html>