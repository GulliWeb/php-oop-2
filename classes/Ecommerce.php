<?php
// Creo la classe ecommerce
class Ecommerce {
    private $products = [];

    // Metodo per aggiungere prodotti
    public function addProduct($product) {
        $this->products[] = $product;
    }

    // Funzione per restituire i prodotti
    public function getProducts() {
        return $this->products;
    }
}
?>