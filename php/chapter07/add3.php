<?php

function arrPrint($arr){
    $size = count($arr);
    echo "[";
    for($i = 0; $i < $size; $i++){
        echo $arr[$i];
        if($i != $size-1)
            echo ", ";
        else
            echo "]";
    }
    echo "<br>";
}

// 병합 정렬 함수

function merge_sort(&$arr) {
    $len = count($arr);
    if ($len < 2) {
        return;
    }
    $mid = (int) ($len / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    merge_sort($left);
    merge_sort($right);

    $i = $j = $k = 0;
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $arr[$k++] = $left[$i++];
        } else {
            $arr[$k++] = $right[$j++];
        }
    }
    while ($i < count($left)) {
        $arr[$k++] = $left[$i++];
    }
    while ($j < count($right)) {
        $arr[$k++] = $right[$j++];
    }
    echo arrPrint($arr);
}

// 퀵 정렬 함수
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

// 실행 코드
$arr = array(11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 21);
echo "0) 원본<br>";
echo implode(" ", $arr) . "<br><br>";

echo "1) 병합 정렬<br>";
echo "Before : [" . implode(", ", $arr) . "]<br>";
$copy = $arr;
merge_sort($copy);
echo "After : [" . implode(", ", $copy) . "]<br><br>";

echo "2) 퀵 정렬<br>";
echo "Before : [" . implode(", ", $arr) . "]<br>";
$copy = $arr;
quicksort($copy, 0, count($copy) - 1);
quicksort_process($copy);
echo "After : [" . implode(", ", $copy) . "]<br>";
?>
