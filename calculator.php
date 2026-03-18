<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Простой калькулятор</title>
</head>
<body>

<form method="POST">
    <input type="number" name="a" placeholder="Первое число" required>
    <input type="number" name="b" placeholder="Второе число" required>
    
    <button type="submit" name="op" value="+">+</button>
    <button type="submit" name="op" value="-">-</button>
    <button type="submit" name="op" value="*">*</button>
    <button type="submit" name="op" value="/">/</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $op = $_POST['op'];
    $result = 0;

    switch ($op) {
        case '+': $result = $a + $b; break;
        case '-': $result = $a - $b; break;
        case '*': $result = $a * $b; break;
        case '/': 
            if ($b != 0) {
                $result = $a / $b;
            } else {
                $result = "Ошибка: деление на ноль";
            }
            break;
    }

    echo "<h2>Результат: $result</h2>";
}
?>

</body>
</html>

