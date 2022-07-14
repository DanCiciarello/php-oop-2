<?php

class Product
{
    private $title;
    private $description;
    private $fullPrice;

    function __construct($_title, $_description, $_fullPrice)
    {
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setPrice($_fullPrice);
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($fullPrice): self
    {
        // Controllo che il prezzo inserito sia un numero
        if(is_int($fullPrice) === false){
            $this->fullPrice = "";
        } else {
            $this->fullPrice = $fullPrice;
        }

        return $this;
    }
};

?>