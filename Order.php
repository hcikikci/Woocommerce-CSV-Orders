<?php

class Order
{
    // Properties

    private $values;
    private $products;



    public function get_values()
    {
        return $this->values;
    }

    public function set_values($values)
    {
        $this->values = $values;

        return $this;
    }


    /**safafsfasafdeneme yazısı kanka saplfalp
     * deneme
     * Get the value of products
     */
    public function get_products()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */
    public function set_products($products)
    {
        $this->products = $products;

        return $this;
    }

}
