<?php

class Cart {
    private $owner;
    private $list = [];
    private $total;

    function __construct($_owner)
    {
        $this->setOwner($_owner);
        $this->setTotal();
    }

    function addProduct($product){
        $this->list[] = $product;
    }

    /**
     * Get the value of owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     */
    public function setOwner($owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of list
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set the value of total
     */
    public function setTotal(): self
    {
        $this->total = 100;

        return $this;
    }


    /**
     * Get the value of total
     */
    public function getTotal()
    {
        if($this->owner->isRegistered === false){
            return $this->total;
        } else if ($this->owner->isRegistered === true){
            return $this->total * 0.8;
        }
    }
}


?>