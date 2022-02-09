<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 02</title>
</head>
<body>
    <?php
        $amount=100;
        $vat=0.15*$amount;
        $total=$vat+$amount;
        echo "Amount: ", $amount;
        echo"<br>";
        echo "Amount total with vat: ", $total;
    ?>
</body>
</html>