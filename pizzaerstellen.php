
<?php
function myAutoloader($className ){
$classFile = "../Class/".$className . '.php'; //Class/Kundedfgfdg.php

if (file_exists($classFile)) {
require_once $classFile;
}
}
spl_autoload_register('myAutoloader');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
</head>
<body>
<form action="showpizza.php" method="post">
<!--    <label for="salami">Salami</label>-->
<!--    <input type="number" step="1" min="0" max="10" name="salami" id="salami" ><br>-->
<!--    <label for="pilze">Pilze</label>-->
<!--    <input type="number" step="1" min="0" max="10" name="pilze" id="pilze" ><br>-->
<!--    <label for="ananas">Ananas</label>-->
<!--    <input type="number" step="1" min="0" max="10" name="ananas" id="ananas" ><br>-->
    <?php
    $toppings = [$salami = new Topping('Salami', 1.00),$pilze = new Topping('Pilze', 0.80),$ananas = new Topping('Ananas', 20.00)] ;
    foreach ($toppings as $topping) {
        echo  "<label for='{$topping->getName()}'>{$topping->getName()}</label>
    <input type='number' step='1' min='0' max='10' name='topping[{$topping->getName()}]' id={$topping->getName()} value='0' ><br>";

    }



    ?>
    <label for="gross">Gross</label>
    <input type="radio" id='gross' name='gk' value="1">
    <label for="klein">Klein</label>
    <input type="radio" id='klein' name='gk' value="0">




    <input type="submit">
</form>

</body>
</html>