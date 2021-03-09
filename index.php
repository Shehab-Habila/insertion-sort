<?php

/*

Shehab-Habila

Insertion sort
----------------

*/

$values = array(5, 3, 4, 9, 7, 0, 2, 66, 15, 3.9, 4);
$valuesNum = count($values);
$start = 1;
$check = $start-1;

echo "UnSorted:<br>";
print_r($values);

while ($start < $valuesNum) {
    $currentValue = $values[$start];
    while ($check >=0 ) {
        $checkedValue = $values[$check];
        if ($checkedValue > $currentValue) {
            if ($check-1 >= 0) {
                if ($values[$check-1] < $currentValue) {
                    unset($values[$start]);
                    array_splice($values, $check, 0, $currentValue);
                }
            }
            else {
                unset($values[$start]);
                array_splice($values, $check, 0, $currentValue);
            }
        }
        elseif ($checkedValue == $currentValue) {
            unset($values[$start]);
            array_splice($values, $check+1, 0, $currentValue);
        }
        $check--;
    }
    $start++;
    $check = $start-1;
}

echo "<br><br><br>Sorted:<br>";
print_r($values);
