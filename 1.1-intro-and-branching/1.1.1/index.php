<?php
$variable = null;
if (is_bool($variable)) {
    $type = "bool";
    $desc = "Логический тип.";
} elseif (is_float($variable)) {
    $type = "float";
    $desc = "Число с плавающей точкой.<br/>Используется для вещественных чисел.";
} elseif (is_int($variable)) {
    $type = "int";
    $desc = "Целое число.";
} elseif (is_string($variable)) {
    $type = "string";
    $desc = "Строка.<br/>Используется для вывода текста.";
} elseif (is_null($variable)) {
    $type = "null";
    $desc = "Переменная без значения.";
} else {
    $type = "other";
}
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is <?=$type?></p>
    <hr>
    <p><?=$desc?></p>
</body>
</html>