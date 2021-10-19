<html>
    <head></head>

    <body>
        <?php
            $str = "Hello there my name is Kevin";
            $count = 0;
 
            $length = strlen($str);

            for ($i = 0; $i < $length; $i++) {
                if ($str[$i] == " ") {
                    $str[$i] = "%";
                    $count++;
                }

                echo $str[$i];
            }

            echo "<br><br>The number of % is: {$count}";
        ?>
    </body>
</html>