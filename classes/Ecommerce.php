<?php
// Classe Ecommerce
class Ecommerce {
    private $products = [];

    // Metodo Setter per aggiungere i prodotti
    public function setProducts($products) {
        $this->products = $products;
    }

    // Metodo getter per ritornare i prodotti
    public function getProducts() {
        return $this->products;
    }
}
?>