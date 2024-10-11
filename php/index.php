<?php
// Importo i file delle mie classi nel mio index PHP
require_once __DIR__ ."/../classes/Ecommerce.php";
require_once __DIR__ ."/../classes/Products.php";
require_once __DIR__ ."/../classes/ProductsCategory.php";
require_once __DIR__ ."/../classes/ProductsType.php";

// Istanzio il mio nuovo OGGETTO di tipo Ecommerce ("$store")
$store = new Ecommerce();

$dogCategory = new ProductsCategory("Cani");
$catCategory = new ProductsCategory("Gatti");

// Creo dei nuovi OGGETTI productsType 
$foodType = new ProductsType("Cibo");
$toyType = new ProductsType("Gioco");
$bedType = new ProductsType("Cuccia");

// Creo dei nuovi OGGETTI products e li aggiungo al mio Ecommerce
$product1 = new Products("Croccantini", 25.99, "https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2019/08/crocchette-italiane.png", $dogCategory, $foodType);
$product2 = new Products("Palla di gomma", 10.50, "https://static.zoomalia.com/prod_img/13843/xl_balle-22707.jpg", $dogCategory, $toyType);
$product3 = new Products("Cuscino per Gatti", 20.00, "https://www.donarturo.it/cdn/shop/products/Cuscino-gatti-boucle-panna-con-gatto.jpg?v=1664547170&width=1445", $catCategory, $bedType);

$store->addProduct($product1);
$store->addProduct($product2);
$store->addProduct($product3);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!-- Css -->
     <link rel="stylesheet" href="../styles/style.css">
    <title>PHP OOP 2</title>
</head>
<body>     
<div class="container">
        <h1 id="title" class="text-center text-white pb-3 fs-1">Prodotti per Animali</h1>
        <div class="row">
            <!-- Ciclo foreach per raccogliere e successivamente stampare i prodotti -->
            <?php foreach ($store->getProducts() as $product): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?= $product->getImage(); ?>" class="card-img-top" alt="<?= $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?= $product->getPrice(); ?>€</p>
                            <p class="card-text">Categoria: <?= $product->getCategory()->getName(); ?></p>
                            <p class="card-text">Tipo: <?= $product->getType()->getType(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="width: 100%; text-align: center; " class="andrea-gulli">Made with &hearts; by Andrea Gulli</div>
    </div>
</body>
</html>
</body>
</html>