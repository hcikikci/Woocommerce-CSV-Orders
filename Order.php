<?php

class Order
{
    // Properties


    /**
     * @param $values
     * @param $products
     */
    public function __construct($values, $products)
    {
        $this->values = $values;
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function get_values()
    {
        return $this->values;
    }

    /**
     * @param mixed $values
     */
    public function set_values($values): void
    {
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function get_products()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function set_products($products): void
    {
        $this->products = $products;
    }




}
