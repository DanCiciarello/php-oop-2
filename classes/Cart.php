<?php

class Cart {
    private $owner;
    private $list = [];
    private $total;

    function __construct($_owner)
    {
        $this->setOwner($_owner);
    }

    function addProduct($product){
        $this->list[] = $product;
    }

    function calcTotal($arr){
        if(empty($arr)){
            $this->total = 0;
        } else {
            foreach($arr as $obj){
                $this->total += $obj->getFullPrice();
            }
        }
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
        return $this;
    }


    /**
     * Get the value of total
     */
    public function getTotal()
    {
        if($this->owner->getIsRegistered() === false){
            $this->calcTotal($this->list);
            return $this->total;
        } else if ($this->owner->getIsRegistered() === true){
            $this->calcTotal($this->list);
            return $this->total * 0.8;
        }
    }
}


?>