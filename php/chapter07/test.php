<?php
function quicksort($array) {
    if (count($array) <= 1) {
        return $array;
    }

    $pivot = $array[0];
    $left = $right = [];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quicksort($left), [$pivot], quicksort($right));
}

function quicksort_process($array) {
    echo "Before: " . implode(", ", $array) . "<br>";
    $result = quicksort_process_helper($array);
    echo "After: " . implode(", ", $result) . "<br>";
}

function quicksort_process_helper($array) {
    if (count($array) <= 1) {
        return $array;
    }

    $pivot = $array[0];
    $left = $right = [];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    $left_str = $left ? "[" . implode(", ", $left) . "]" : "[]";
    $right_str = $right ? "[" . implode(", ", $right) . "]" : "[]";
    echo $left_str . " [" . $pivot . "] " . $right_str . "<br>";

    return array_merge(quicksort_process_helper($left), [$pivot], quicksort_process_helper($right));
}

$array = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 21];
quicksort_process($array);
?>
