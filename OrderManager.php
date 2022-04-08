<?php
require_once('ErrorHandler.php');
class OrderManager
{

    // Orders Controller Method
    public function __construct()
    {
        $this->orders = [];
        $this->ErrorHandler = new ErrorHandler();
    }

    public function create_orders($headers, $lines)
    {
        $orders = [];

        foreach ($lines as $data) {
            $data_values = explode(';', $data);

            if ($data_values[0] != NULL) {

                //YENİ ORDER NESNESİ TANIMLANIR
                $order = new Order();

                $temp_array = $this->header_value_match($headers, $data_values);


                $skus = explode(',', $temp_array["sku"]);
                $quantities = explode(',', $temp_array["quantity"]);



                $temp_array["products"] = $this->sku_quantity_match($skus, $quantities);
                unset($temp_array["sku"]);
                unset($temp_array["quantity"]);
                //OLUŞTURULAN PROPERTYLERİ ORDER'A ATAR
                $order->set_values($temp_array);

                //OLUŞTURULAN ORDER'I ORDERS LİSTESİNE KOYAR
                array_push($orders, $order);
            }
        }

        //ORDERS NESNELERİ ATANIR
        $this->orders = $orders;
    }


    //SKU VE QUANTİTİYLERİ EŞLEŞTİRİP VE TEMP ARRAYE KOYAR
    private function sku_quantity_match($skus, $quantities)
    {
        for ($i = 0; $i < count($skus); $i++) {
            $products[$skus[$i]] = intval($quantities[$i]);
        }
        return $products;
    }

    //HEADERLAR VE VALUELARI EŞLEŞTİRİR VE TEMP ARRAYE KOYAR
    private function header_value_match($headers, $data_values)
    {
        $temp_array = [];
        for ($i = 0; $i < count($headers); $i++) {
            /* if (strpos(strtolower($headers[$i]), "sku") !== false || strpos(strtolower($headers[$i]), "quantity") !== false) :
                continue;
            endif;*/
            $temp_array[$headers[$i]] = $data_values[$i];
        }
        return $temp_array;
    }

    // Output 
    public function show_info()
    {
        echo "<pre>";
        for ($i = 0; $i < count($this->orders); $i++) {
            print_r($this->orders[$i]->get_values());
        }
    }
}
