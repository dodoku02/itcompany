<!-- Header.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Services Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/animation.css">
    <style>
        /* Небольшие кастомные стили */
        body {
            padding-top: 70px; /* Пространство под фиксированную навигацию */
        }
        nav.navbar-fixed-top {
            position: fixed;
            top: 0;
            z-index: 1000;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Навигационная панель -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">IT Services</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/public_html/index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public_html/services.php">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public_html/about.php">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public_html/contact.php">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public_html/register.php">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Footer -->


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (event) {
            event.preventDefault();
            
            const targetSection = this.hash.substring(1); // Получаем ID целевого элемента
            const elementPosition = document.getElementById(targetSection).offsetTop;

            window.scrollTo({
                top: elementPosition,
                behavior: 'smooth',
            });
        });
    });
});
</script>
</body>
</html>