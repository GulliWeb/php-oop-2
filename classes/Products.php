<?php

// Importo il traits nel mio file
require_once __DIR__ ."/../traits/StillAvailable.php";

class Products {
    private $name, $price,  $image, $category, $type;

    // Metodo costruttore
    public function __construct($name, $price, $image, ProductsCategory $category, ProductsType $type) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }

    // Metodi Getter
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getType() {
        return $this->type;
    }

    // Metodi Setter
    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setCategory(ProductsCategory $category) {
        $this->category = $category;
    }

    public function setType(ProductsType $type) {
        $this->type = $type;
    }
}
?>