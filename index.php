<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require __DIR__ . '/functions.php';
require_once 'vendor/autoload.php';



$input =
    [
        'radość',
        'wyobraźnia',
        'optymizm',
        'ciekawość'
    ];


use ColorContrast\ColorContrast;



$contrast = new ColorContrast();
$contrast->addColors(0xff0000, 0x002200, 0x0022ff, 0xffffff);
$combinations = $contrast->getCombinations(ColorContrast::MIN_CONTRAST_AAA);
foreach ($combinations as $combination) {
    printf("#%s on the Background color #%s has a contrast value of %f \n", 
            $combination->getForeground(), 
            $combination->getBackground(), 
            $combination->getContrast()
        );
    echo '<br>';
}



// $color = check_color($input)['color'];
// var_dump($color);

if($_GET['name']){
    $color = $_GET['name'];
}else {
    $color = check_color($input)['color'];
}

// $color = $_GET['name'];
include 'style.php';

?>

<div>

</div>
    <form action="index.php" method="get">
    <input type="color" name="name" value="<?php echo $color?>">
    <input type="submit">
</form>
</body>
</html>








<script src="./script.js"></script>