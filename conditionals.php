<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //todo: Conditianals
        //info: (' same a in ==< javascript >== ')
        function guardClausPHP($obj) {
            $hasTax = $obj['tax'] !== null;
            $hasPrice = $obj['price'] !== null;
            $hasShippingCost = $obj['shippingCost'] !== null; 
            $isValid = $hasTax && $hasPrice && $hasShippingCost;
            if($isValid){
                $price = $obj['price'];
                $tax = $obj['tax'];
                $shippingCost = $obj['shippingCost'];
                $price = $price * $tax;
                $price = $price - $shippingCost;
                return $price;
            }
            else {
                echo 'not valid object';
            }
        }
        guardClausPHP(
            array(
                'tax' => 0.2,
            )
        )
    ?>
</body>
</html>