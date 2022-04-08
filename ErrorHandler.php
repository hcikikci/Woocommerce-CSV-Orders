<?php

class ErrorHandler
{
    private $errors;

    public function check_quantity_sku($skus, $quantities)
    {
        if (count($quantities) != count($skus)) :
            array_push($this->errors, "No quantity found corresponding to the product sku :  ");
        endif;
    }
    /*if (count($data_values) != 12) :
                array_push($errors, "The CSV file does not match the template file.");
                break;
            endif;*/




    /*
                 "sku", "lastname", "address", "city", "postcode",
                    "country", "state", "phone", "email",
                "company", "quantity", "firstname", "tckimlikno"*/

    /*
                 SKU VE QUANTİTİYLERİ EŞLEŞTİRİP VE TEMP ARRAYE KOYAR
                $skus = 
                $quantities = explode(',', $data_values[11]);
                for ($i = 0; $i < count($skus); $i++) {
                    $products[$skus[$i]] = intval($quantities[$i]);
                }
                $temp_array["products"] = $products;
                */


    //HEADERLAR VE VALUELARI EŞLEŞTİRİR VE TEMP ARRAYE KOYAR
    /*
                for ($i = 0; $i < count($headers); $i++) {
                    if (strpos(strtolower($headers[$i]), "sku") !== false || strpos(strtolower($headers[$i]), "quantity") !== false) :
                        continue;
                    endif;
                    $temp_array[$headers[$i]] = $data_values[$i];
                }*/
}
