<?php
//TASK 1
$address = 'https://example.com';

if (strpos($address, 'https://') !== false) {
    echo 'Да ';
} else {
    echo 'Нет ';
}

if (substr($address, 0, 8) === 'https://') {
    echo 'Да ';
} else {
    echo 'Нет ';
}
//TASK 2
$amDate = '05-29-1993';
$ruDate = str_replace('-', '.', $amdate);
echo ;

?>