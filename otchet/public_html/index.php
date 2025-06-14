<?php require_once __DIR__.'/../templates/header.php'; ?>

<div class="container my-5">
    <!-- Карусель изображений на главной странице -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/slide1.jpg" class="d-block w-100" alt="Первое изображение">
            <div class="carousel-caption d-none d-md-block">
                <h3>Сыщик 1</h3>
                <p>Описание первого слайда</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/slide2.jpg" class="d-block w-100" alt="Второе изображение">
            <div class="carousel-caption d-none d-md-block">
                <h3>Сыщик 2</h3>
                <p>Описание второго слайда</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/slide3.jpg" class="d-block w-100" alt="Третье изображение">
            <div class="carousel-caption d-none d-md-block">
                <h3>Сыщик 3</h3>
                <p>Описание третьего слайда</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>
    <h1>Приветствуем вас на сайте нашей IT-компании!</h1>
    <p>Предлагаем широкий спектр профессиональных IT-услуг:</p>
    <ul>
        <li><b>Разработка веб-сайтов</b> любой сложности</li>
        <li><b>Поддержка и сопровождение сайтов</b></li>
        <li><b>Интеграции CRM-систем</b></li>
        <li><b>Обучение сотрудников работе с новыми технологиями</b></li>
    </ul>
    <a href="/public_html/services.php" class="btn btn-primary">Узнать подробнее</a>
</div>
<h2>Калькулятор стоимости услуг</h2>
<p>Расчёт стоимости предоставляется на основании выбранного объёма и вида услуги.</p>

<div class="form-group row">
    <label for="serviceSelect" class="col-sm-2 col-form-label">Вид услуги:</label>
    <div class="col-sm-10">
        <select class="custom-select form-control" id="serviceSelect">
            <option selected disabled>Выберите услугу</option>
            <option value="development">Разработка веб-сайтов</option>
            <option value="seo">SEO-продвижение</option>
            <option value="crm">Настройка CRM</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="volumeInput" class="col-sm-2 col-form-label">Объём (часы):</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="volumeInput" placeholder="Количество часов">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <button onclick="calculateCost()" class="btn btn-primary">Рассчитать стоимость</button>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <h4 id="resultOutput"></h4>
    </div>
</div>

<script>
function calculateCost() {
    var serviceSelected = document.getElementById('serviceSelect').value;
    var volumeHours = document.getElementById('volumeInput').value;

    var cost = 0;
    if (serviceSelected === 'development') {
        cost = volumeHours * 50; // Стоимость часа разработки
    } else if (serviceSelected === 'seo') {
        cost = volumeHours * 30; // Стоимость часа продвижения
    } else if (serviceSelected === 'crm') {
        cost = volumeHours * 40; // Стоимость настройки CRM
    }

    document.getElementById('resultOutput').innerHTML = "<strong>Стоимость:</strong> " + cost + " рублей";
}
</script>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackModal">
    Обратная связь
</button>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Форма обратной связи</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Введите ваше имя">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Электронная почта</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="example@mail.ru">
                    </div>
                    <div class="mb-3">
                        <label for="messageTextarea" class="form-label">Сообщение</label>
                        <textarea class="form-control" id="messageTextarea" rows="3" placeholder="Напишите сообщение"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>
<script>
window.onscroll = function() {
    showElementsOnScroll();
};

function showElementsOnScroll() {
    var elements = document.querySelectorAll('.hidden');
    elements.forEach(function(element) {
        var rect = element.getBoundingClientRect();
        if(rect.top <= window.innerHeight && rect.bottom >= 0){
            element.classList.remove('hidden');
            element.classList.add('show');
        }
    });
}
</script>
<?php require_once __DIR__.'/../templates/footer.php'; ?>