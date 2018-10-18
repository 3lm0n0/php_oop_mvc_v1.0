<?php
class Producto
{
    private $name;
    private $price;

    public function __construct(String $name, Float $price)
    {
        $this->code = $code;
        $this->category = $category;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getCode(): String
    {
        return $this->code;
    }
    public function setCode(String $code)
    {
        $this->code = $code;
    }

    public function getCategory(): String
    {
        return $this->category;
    }
    public function setCategory(String $category)
    {
        $this->category = $category;
    }

    public function getName(): String
    {
        return $this->name;
    }
    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getQuantity(): String
    {
        return $this->quantity;
    }
    public function setQuantity(String $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): Float
    {
        return $this->price;
    }
    public function setPrice(Float $price)
    {
        $this->price = $price;
    }
}
?>
