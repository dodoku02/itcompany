<?php
session_start();

// Проверяет, залогинился ли пользователь
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Перенаправляет на страницу входа
    exit();
}