<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function is_prime($number) {
        if ($number < 2) {
            return false;
        }
        for($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    for ($i = 1; $i <= 100; $i++) {
        if (is_prime($i)) {
            echo ", " . $i;
        }
    }
    ?>


    <?php
    function is_prime($number) {
        if ($number < 2) {
            return false;
        }
        $dem= 0;
        for($i = 1; $i<$number;$i++){
            if($number % $i == 0){
                $dem+=1;
            }
        }
        if($dem == 2){
            return true;
        }
        else{
            return false;
        }
    }
    for ($i = 1; $i <= 100; $i++) {
        if (is)
    }
    ?>
</body>
</html>
