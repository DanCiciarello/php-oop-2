<?php

require_once __DIR__ . "/Product.php";

class Food extends Product 
{
    private $weight;
    private $recipe;

    function __construct($_title, $_description, $_price, $_weight, $_recipe)
    {
        parent::__construct($_title, $_description, $_price);

        $this->setWeight($_weight);
        $this->setRecipe($_recipe);
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight($weight): self
    {
        // Controllo che il peso inserito sia un numero
        if(is_int($weight) === false){
            $this->weight = "";
        } else {
            $this->weight = $weight . " grammi";
        }

        return $this;
    }

    /**
     * Get the value of recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Set the value of recipe
     */
    public function setRecipe($recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }
}

?>