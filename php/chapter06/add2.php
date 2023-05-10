<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $arr = array(11,23,5,71,90,151,133,15,19,9,25,26,24,14,52,30,82,65,47,21);
        
        function arrPrint($arr){
            echo "[";
            for($i = 0; $i < 19; $i++)
            echo $arr[$i].", ";
            echo $arr[19]."]";
            echo "<br>";
        }

        function selectionSort($num){
            $size = count($num);
            for($i=0; $i<$size; $i++){
                $mindx = $i;
                for($j=$i+1; $j<$size; $j++){
                    if($num[$mindx]>$num[$j]) $mindx = $j;
                }
                $temp = $num[$mindx];
                $num[$mindx];
                $num[$mindx]=$num[$i];
                $num[$i]=$temp;

                $k=0;
                if($k < $i) echo "[";
                for($k; $k<$i; $k++){
                    echo $num[$k];
                    if($k != $i-1)
                        echo ", ";
                    else
                        echo "]<br>";
                }
            }
            echo "After : ";
            arrPrint($num);
        }
        
        function insertionSort($num){
            $size = count($num);
            for($i=1; $i<$size; $i++){
                $temp = $num[$i];
                for($j=$i-1; $j>=0; $j--){
                    if($num[$j]<$temp) break;
                    $num[$j+1] = $num[$j];
                }
                $num[$j+1] = $temp;
                
                $k=0;
                if($k < $i) echo "[";
                for(; $k<$i; $k++){
                    echo $num[$k];
                    if($k != $i-1)
                        echo ", ";
                    else
                        echo "]<br>";
                }
            }
            echo "After : ";
            arrPrint($num);
        }

        function bubleSort($num){
            $count = 20;
            for($i=$count-2; $i>=0; $i--){
                for($j=0; $j<=$i; $j++){
                    if($num[$j] > $num[$j+1]){
                        $tmp = $num[$j];
                        $num[$j] = $num[$j+1];
                        $num[$j+1] = $tmp;
                    }
                }
                arrPrint($num);
            }
            echo "After : ";
            arrPrint($num);
        }
        

        echo "0) 원본<br>";
        echo "1) 버블 정렬<br>";
        echo "Before : ";
        arrPrint($arr);
        bubleSort($arr);

        echo "<br>";

        echo "2) 선택 정렬<br>";
        echo "Before : ";
        arrPrint($arr);
        selectionSort($arr);

        echo "<br>";

        echo "3) 삽입 정렬<br>";
        echo "Before : ";
        arrPrint($arr);
        insertionSort($arr);
    ?>
</body>
</html>
