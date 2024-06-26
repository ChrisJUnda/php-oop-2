<?php
//INCLUDIAMO LE CLASSI
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/categories.php';

$dogCategories = new Categories("Cani");
$catCategories = new Categories("Gatti");

var_dump($dogCategories);
var_dump($catCategories);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>

<body>

    <!-- Header -->
    <Header>
        Sono Header

    </Header>
    <!-- /Header -->

    <!-- MAIN -->
    <Main>
        Sono Main

    </Main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <Footer>
        Sono Footer

    </Footer>
    <!-- /FOOTER -->


</body>

</html>