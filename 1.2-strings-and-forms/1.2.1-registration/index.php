<?php
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = strtolower(str_replace(' ', '', $_POST['code']));
$codeWord = 'nd82jaake';


if (preg_match('/\W/', $login)) {
    echo 'Поле логин не должно содержать спецсимволы';
} elseif (strlen($password) < 8) {
    echo 'Длина пароля должна быть минимум 8 символов';
} elseif (!(preg_match('/^\w+\@[a-zA-Z]+\.[a-zA-Z]+/', $email))) {
    echo 'Почта должна быть формата почта@домен.доменнаязона';
} elseif (strlen($firstName) === 0) {
    echo 'Поле имя обязательно к заполнению';
} elseif (strlen($lastName) === 0) {
    echo 'Поле фамилия обязательно к заполнению';
} elseif (strlen($middleName) === 0) {
    echo 'Поле отчество обязательно к заполнению';
} elseif (!(strcmp($code, $codeWord) === 0)) {
    echo 'Кодовое слово введено неверно';
} else {
    echo 'Регистрация прошла успешно!';
}
?>