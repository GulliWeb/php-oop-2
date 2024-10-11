<?php
trait StillAvailable {
    // Aggiungo una variabile di istanza privata per lo stock merci
    private $stock; 

    // Metodo per impostare il valore iniziale dello stock
    public function setStock($quantity) {
        $this->stock = $quantity;
    }

    // Metodo per verificare se il prodotto è ancora disponibile
    public function isAvailable() {
        return $this->stock > 0;
    }

    // Metodo per ridurre lo stock
    public function reduceStock($quantity) {
        $this->stock -= $quantity;
        if ($this->stock < 0) {
            $this->stock = 0; 
        }
    }

    // Metodo per rendere il prodotto non disponibile 
    public function markAsUnavailable() {
        $this->stock = 0; 
    }
}


?>
