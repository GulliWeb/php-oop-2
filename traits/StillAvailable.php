<?php
trait StillAvailable {
    private $available = true;

    // Metodo per verificare se il prodotto è ancora disponibile
    public function isAvailable() {
        return $this->available;
    }

    // Metodo per rendere il prodotto non disponibile
    public function markAsUnavailable() {
        $this->available = false; 
    }
}

?>