<html>
    <head></head>

    <body>
        <?php
            $sum = 0;

            for ($i=30; $i<=50; $i++) {
                if ($i%2==1) {
                    $sum += $i;
                } else {
                    continue;
                }
            }

            echo $sum;
        ?>
    </body>
</html>