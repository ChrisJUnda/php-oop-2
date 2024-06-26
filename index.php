<?php
//INCLUDIAMO LE CLASSI
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/categories.php';
require_once __DIR__ . '/models/Food.php';

$dogCategories = new Categories("Cani");
$catCategories = new Categories("Gatti");

//products

$products = [
    new Food("Dentastix", 5, $dogCategories),
];

// var_dump($dogCategories);
// var_dump($catCategories);
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
        <!-- Sono Header -->

    </Header>
    <!-- /Header -->

    <!-- MAIN -->
    <Main>
        <!-- Sono Main -->
        <ul>
            <li <?php foreach ($products as $product) : ?>>


                <h2><?= $product->getTitle(); ?></h2>

                <p>Categoria: <?= $product->getCategory()->getName(); ?></p>


                <p>Prezzo: <?= $product->getPrice(); ?>€</p>

            <?php endforeach; ?>
            </li>
        </ul>

    </Main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <Footer>
        <!-- Sono Footer -->

    </Footer>
    <!-- /FOOTER -->


</body>

</html>