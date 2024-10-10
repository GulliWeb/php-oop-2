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
$product1 = new Products("Croccantini", 25.99, "https://www.google.com/url?sa=i&url=https%3A%2F%2Fvalerioguiggi.it%2Fcambio-graduale-croccantini%2F&psig=AOvVaw19HBPH32XYhIMz2gXlmtPz&ust=1728662764720000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCND7iuOYhIkDFQAAAAAdAAAAABAI", $dogCategory, $foodType);
$product2 = new Products("Palla di gomma", 10.50, "https://www.google.com/imgres?q=palla%20di%20gomma&imgurl=https%3A%2F%2Fwww.sportgym.it%2Fshop-calcio%2F186-large_default%2Fpallone-in-gomma-spugna-oe-cm-20.jpg&imgrefurl=https%3A%2F%2Fwww.sportgym.it%2Fshop-calcio%2Fpalloni-calcetto-portapalloni%2F86-pallone-in-gomma-spugna-oe-cm-20.html&docid=pEVLd2NclAIZbM&tbnid=6tjZbWhjSNUSAM&vet=12ahUKEwia5cTsmISJAxWBgv0HHRD1NncQM3oECBsQAA..i&w=800&h=800&hcb=2&ved=2ahUKEwia5cTsmISJAxWBgv0HHRD1NncQM3oECBsQAA", $dogCategory, $toyType);
$product3 = new Products("Cuscino per Gatti", 20.00, "https://www.google.com/imgres?q=cuscino%20gatti&imgurl=https%3A%2F%2Fwww.donarturo.it%2Fcdn%2Fshop%2Fproducts%2FCuscino-gatti-boucle-panna-con-gatto.jpg%3Fv%3D1664547170%26width%3D1445&imgrefurl=https%3A%2F%2Fwww.donarturo.it%2Fproducts%2Fguanciale-un-tubo-cuscino-gatto&docid=XQq5Nj1-izpTeM&tbnid=4SCAfZWJiGZ9sM&vet=12ahUKEwimidn0mISJAxVy7bsIHY5YOZQQM3oECGUQAA..i&w=1200&h=960&hcb=2&ved=2ahUKEwimidn0mISJAxVy7bsIHY5YOZQQM3oECGUQAA", $catCategory, $bedType);

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
        <h1 class="text-center text-white pb-3">Prodotti per Animali</h1>
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
        <div class="andrea-gulli">Made with &hearts; by Andrea Gulli</div>
    </div>
</body>
</html>
</body>
</html>