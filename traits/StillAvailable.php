<?php

// Definisco la classe per la mia exception
class StockException extends Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

trait StillAvailable {
    // Aggiungo una variabile di istanza privata per lo stock merci
    private $stock; 

    // Metodo per impostare il valore iniziale dello stock e controllare tramite EXCEPTION che il valore iniziale merce sia >= 0
    public function setStock($quantity) {
        if ($quantity < 0) {
            throw new StockException("La quantità di stock non può essere negativa.");
        }
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
