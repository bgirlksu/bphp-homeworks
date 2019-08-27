<?php
function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow > $avaliableCount) {
        return false;
    }
    $map = [];
    for ($i = 0; $i < $rows; $i++) {
        $map[$i] = [];
        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }
    return $map;
}

function reserve($map, $row, $place) {
    if ($map[$row][$place] === false) {
        global $map;
        $map[$row][$place] = true;
        return true;
    } elseif (isset($map[$row - 1][$place - 1]) === false || $map[$row - 1][$place - 1] === true) {
        return false;
    }
}

function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place<br/>";
    } else {
        echo "Что-то пошло не так=( Бронь не удалась<br/>";
    }
}

$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);
?>