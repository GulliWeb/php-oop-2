<?php
class ProductsType {
    private $type;

    // Metodo costruttore
    public function __construct($type) {
        $this->type = $type;
    }

    // Metodo getter
    public function getType() {
        return $this->type;
    }

    // Metodo setter
    public function setType($type) {
        $this->type = $type;
    }
}
?>