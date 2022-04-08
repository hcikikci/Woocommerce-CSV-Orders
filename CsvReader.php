<?php

class CsvReader
{
    // Read csv file path
    public $lines;
    public $headers;
    public $template_headers =
    [
        "sku", "lastname", "address", "city", "postcode",
        "country", "state", "phone", "email",
        "company", "quantity", "firstname", "tckimlikno"
    ];


    public function read_csv($path)
    {
        $this->delete_empty_lines($path);

        $this->lines = file($path);

        $header = $this->find_header();
        $this->headers = $header[0];
        unset($this->lines[$header[1]]);
    }

    public function find_header()
    {
        sort($this->template_headers);

        for ($i = 0; $i < count($this->lines); $i++) {
            $attributes = strtolower(str_replace(["\n", "\r", ' '], '', $this->lines[$i]));

            $attributes = explode(";", $attributes);

            // for ($x = 0; $x < count($attributes); $x++) {
            //     $attributes[$x] = strtolower(str_replace(["\n", "\r", ' '], '', $attributes[$x]));
            // }

            $sorted_array = $attributes;
            sort($sorted_array);
            if ($this->template_headers === $sorted_array) :
                return [$attributes, $i];
            endif;
        }
    }

    public function csv_check()
    {
        $errors = [];
        // $this->lines;
        // $skus_length = count($skus);
        // $quantities_length = count($quantities);

        // i($skus_length == $quantities_length){

        // }

        return $errors;
    }

    private function delete_empty_lines($path)
    {
        file_put_contents(
            $path,
            preg_replace(
                '~[\r\n]+~',
                "\r\n",
                trim(file_get_contents($path))
            )
        );
    }

    public function show_info()
    {
        foreach ($this->headers as $header) {
            echo ($header);
        }
    }
}
