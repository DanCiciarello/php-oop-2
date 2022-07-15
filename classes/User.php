<?php

require_once __DIR__ . "/../traits/Utility.php";

class User {

    use Utility;

    private $name;
    private $creditCardExpireMonth;
    private $creditCardExpireYear;
    // private $creditCardAvailable;
    private $isRegistered;

    function __construct($_name, $_creditCardExpireMonth, $_creditCardExpireYear, $_isRegistered)
    {
        $this->setName($_name);
        $this->setCreditCardExpireMonth($_creditCardExpireMonth);
        $this->setCreditCardExpireYear($_creditCardExpireYear);
        // $this->setCreditCardAvailable();
        $this->setIsRegistered($_isRegistered);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        try {
            $this->name = $this->checkString($name);
        } catch(Exception $e){
            echo "Non è stato inserito un testo valido.";
        };
        return $this;
    }

    /**
     * Get the value of creditCardExpireMonth
     */
    public function getCreditCardExpireMonth()
    {
        return $this->creditCardExpireMonth;
    }

    /**
     * Set the value of creditCardExpireMonth
     */
    public function setCreditCardExpireMonth($creditCardExpireMonth): self
    {
        if(is_int($creditCardExpireMonth)){
            $this->creditCardExpireMonth = $creditCardExpireMonth;
        } else {
            $this->creditCardExpireMonth = 0;
        }

        return $this;
    }

    /**
     * Get the value of creditCardExpireYear
     */
    public function getCreditCardExpireYear()
    {
        return $this->creditCardExpireYear;
    }

    /**
     * Set the value of creditCardExpireYear
     */
    public function setCreditCardExpireYear($creditCardExpireYear): self
    {
        if(is_int($creditCardExpireYear)){
            $this->creditCardExpireYear = $creditCardExpireYear;
        } else {
            $this->creditCardExpireYear = 0;
        }

        return $this;
    }

    /**
     * Get the value of creditCardAvailable
     */
    // public function getCreditCardAvailable()
    // {
    //     return $this->creditCardAvailable;
    // }

    /**
     * Set the value of creditCardAvailable
     */
    // public function setCreditCardAvailable(): self
    // {
    //     // Controllo il mese e l'anno corrente
    //     $currentMonth = (int) date('m');
    //     $currentYear = (int) date('Y');
    //     // Controllo la validità della carta
    //     if($this->creditCardExpireYear <= $currentYear && $this->creditCardExpireMonth < $currentMonth){
    //         $this->creditCardAvailable = false;
    //     } else {
    //         $this->creditCardAvailable = true;
    //     }

    //     return $this;
    // }

    /**
     * Get the value of isRegistered
     */
    public function getIsRegistered()
    {
        return $this->isRegistered;
    }

    /**
     * Set the value of isRegistered
     */
    public function setIsRegistered($isRegistered): self
    {
        if($isRegistered === true || $isRegistered === false){
            $this->isRegistered = $isRegistered;
        } else {
            $this->isRegistered = false;
        }

        return $this;
    }
}

?>