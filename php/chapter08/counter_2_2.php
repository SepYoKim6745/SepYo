<?php
    session_start();
    $cnt = $_SESSION['cnt'];
    echo "counter 값 : ".$cnt;
?>