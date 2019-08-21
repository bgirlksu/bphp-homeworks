<?php
$time = date("H");
$day = date("N");

if ($time > 5 && $time < 11) {
    $timeMes = "Доброе утро!";
    $image = "img/morning.jpg";
} elseif ($time > 10 && $time< 18) {
    $timeMes = "Добрый день!";
    $image = "img/day.jpg";
} elseif ($time > 17 && $time< 23) {
    $timeMes = "Добрый вечер!";
    $image = "img/evening.jpg";
} elseif ($time === 23 || $time >= 0 && $time < 6) {
    $timeMes = "Доброй ночи!";
    $image = "img/night.jpg";
}

if ($day == 1) {
    $day = "понедельник";
    if ($time > 8 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00";
    }
} elseif ($day == 2) {
    $day = "вторник";
    if ($time > 8 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00";
    }
} elseif ($day == 3) {
    $day = "среда";
    if ($time > 8 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00";
    }
} elseif ($day == 4) {
    $day = "четверг";
    if ($time > 9 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00";
    }
} elseif ($day == 5) {
    $day = "пятница";
    if ($time > 9 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00";
    }
} elseif ($day == 6) {
    $day = "суббота";
    if ($time > 9 && $time < 19) {
        $mes = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00";
    } else {
        $mes = "Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00";
    }
} elseif ($day == 7) {
    $day = "воскресенье";
    $mes = "Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?=$timeMes?></h1>
            <hr>
            <h2>Сегодня <?=$day?>.</h2>
            <p><?=$mes?></p>
        </div>
    </div>
</body>
</html>