<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $gender = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $terms = isset($_POST['terms']) ? 'Принято' : 'Не принято';

    if ($password !== $confirm_password) {
        die('Ошибка: пароли не совпадают!');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Ошибка: некорректный email!');
    }

    echo '<!DOCTYPE html>';
    echo '<html lang="ru">';
    echo '<head><meta charset="UTF-8"><title>Результат регистрации</title></head>';
    echo '<body>';
    echo '<div style="max-width: 600px; margin: 50px auto; padding: 20px; font-family: Arial, sans-serif;">';
    echo '<h2>Данные успешно отправлены!</h2>';
    echo '<p><strong>Имя:</strong> ' . $name . '</p>';
    echo '<p><strong>Email:</strong> ' . $email . '</p>';
    echo '<p><strong>Пол:</strong> ' . $gender . '</p>';
    echo '<p><strong>Согласие с условиями:</strong> ' . $terms . '</p>';
    echo '<hr>';
    echo '<a href="index.php" style="color: #007bff; text-decoration: none;">Вернуться к форме</a>';
    echo '</div>';
    echo '</body></html>';
} else {
    header('Location: index.php');
    exit;
}
?>

