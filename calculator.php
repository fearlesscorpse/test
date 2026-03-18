<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простой калькулятор</title>
</head>
<body>

<form method="POST">
    <input type="number" name="a" placeholder="Первое число" required step="any">
    <input type="number" name="b" placeholder="Второе число" required step="any">
    
    <button type="submit" name="operation" value="+">+</button>
    <button type="submit" name="operation" value="-">-</button>
    <button type="submit" name="operation" value="*">*</button>
    <button type="submit" name="operation" value="/">/</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $op = $_POST['operation']; 
    $result = '';

    switch ($op) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if ($b == 0) {
                $result = "❌ Ошибка: деление на ноль невозможно!";
            } else {
                $result = $a / $b;
            }
            break;
        default:
            $result = "❌ Неизвестная операция";
    }

    echo "<h3>Результат: " . htmlspecialchars($result) . "</h3>";
}
?>

</body>
</html>

