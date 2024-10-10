<?php
class ProductsCategory {
    private $name; // Nome della categoria

    // Metodo Costruttore
    public function __construct($name) {
        $this->name = $name;
    }

    // Metodo Getter
    public function getName() {
        return $this->name;
    }

    // Metodo Setter
    public function setName($name) {
        $this->name = $name;
    }
}
?>