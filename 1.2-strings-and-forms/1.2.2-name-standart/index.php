<?php
$firstName = strtolower($_POST['firstName']);
$lastName = strtolower($_POST['lastName']);
$middleName = strtolower($_POST['middleName']);

//$fullname = mb_strtoupper(mb_substr($lastName, 0, 1)) . mb_substr($lastName, 1) . ' ' . mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_substr($firstName, 1) . ' ' . mb_strtoupper(mb_substr($middleName, 0, 1)) . mb_substr($middleName, 1);
//$fio = mb_strtoupper(mb_substr($lastName, 0, 1)) . mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));
//$surnameAndInitials = mb_strtoupper(mb_substr($lastName, 0, 1)) . mb_substr($lastName, 1) . ' ' . mb_strtoupper(mb_substr($firstName, 0, 1))  . '.' . mb_strtoupper(mb_substr($middleName, 0, 1)) . '.';
$fullname = ucfirst($lastName) . ' ' . ucfirst($firstName) . ' ' . ucfirst($middleName);
$fio = mb_substr(ucfirst($lastName), 0, 1) . mb_substr(ucfirst($firstName), 0, 1) . mb_substr(ucfirst($middleName), 0, 1);
$surnameAndInitials = ucfirst($lastName) . ' ' . mb_substr(ucfirst($firstName), 0, 1) . '.' . mb_substr(ucfirst($middleName), 0, 1) . '.';

echo "Полное имя: \"$fullname\"<br/>";
echo "Фамилия и инициалы: \"$surnameAndInitials\"<br/>";
echo "Аббревиатура: \"$fio\"";

?>