<?php
// Classe Ecommerce
class Ecommerce {
    private $products = [];

    // Metodo per aggiungere un prodotto
    public function addProduct($product) {
        $this->products[] = $product; // Aggiunge il prodotto all'array
    }

    // Metodo getter per ritornare i prodotti
    public function getProducts() {
        return $this->products;
    }
}
?>