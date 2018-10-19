<?php
class Product
{
    private $code;
    private $category;
    private $name;
    private $quantity;
    private $price;

    public function __construct( $code,  $category,  $name,  $quantity,  $price)
    {
        $this->code = $code;
        $this->category = $category;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode(integer $code)
    {
        $this->code = $code;
    }

    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory(String $category)
    {
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity(integer $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(Float $price)
    {
        $this->price = $price;
    }
}
?>
