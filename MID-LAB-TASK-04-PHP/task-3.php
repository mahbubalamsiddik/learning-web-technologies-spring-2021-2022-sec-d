<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task03</title>
</head>
<body>
    <?php
        echo "Input numbers: 13,16,28,36,33,5";
        echo "<br>";
        $numbers=[13,16,28,36,33,5];
        $even=[];
        $odd=[];
        
        foreach($numbers as $val){
            if($val % 2 == 0) {
                $even[] = $val.",";
            } else {
                $odd[] = $val.",";
            }
        }
        echo"Even Numbers: ";
        foreach($even as $even){
            echo $even;
        }
        
        echo "<br>";
        echo "Odd Numbers: ";
        foreach($odd as $odd){
            echo $odd;
        }
        

        
    ?>
</body>
</html>