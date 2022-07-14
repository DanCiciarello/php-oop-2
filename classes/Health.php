<?php

require_once __DIR__ . "/Product.php";

class Health extends Product 
{
    private $isAvailable;

    function __construct($_title, $_description, $_price)
    {
        parent::__construct($_title, $_description, $_price);

        $this->setIsAvailable();
    }

    /**
     * Get the value of isAvailable
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     */
    public function setIsAvailable(): self
    {
        // Controllo il mese corrente
        $currentMonth = (int) date('m');
        // Controllo che sia disponibile nel periodo attuale
        if($currentMonth >= 5 && $currentMonth <= 8){
            $this->isAvailable = true;
        } else {
            $this->isAvailable = false;
        }

        return $this;
    }
}

?>