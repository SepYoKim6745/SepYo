<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li>
                <?php
                    $num = count($_POST["hobby"]);
                    for($i = 0; $i < $num; $i++){
                        echo $_POST["hobby"][$i];
                        if($i != $num-1)
                            echo ", ";
                    }
                ?>
            </li>
        </ul>
    </body>
</html>