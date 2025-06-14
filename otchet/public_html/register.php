<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        /* Небольшие стили для красивого вывода ошибок */
        .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Регистрация</h2>
    <form id="registrationForm" method="POST" action="process_registration.php">
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name" required pattern=".{2,}" title="Минимум 2 символа">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}"
                   title="Минимум 8 символов, хотя бы одна большая буква, маленькая буква, цифра и специальный символ">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
        </div>
        <div class="g-recaptcha" data-sitekey="ВАША_РЕКАПЧА_КЛЮЧ"></div>
        <br>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>

<!-- Bootstrap и jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Клиентская валидация -->
<script>
$(document).ready(function(){
    $('#registrationForm').on('submit', function(e){
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();

        if(password !== confirmPassword){
            alert('Пароли не совпадают!');
            e.preventDefault();
        }
    });
});
</script>
</body>
</html>