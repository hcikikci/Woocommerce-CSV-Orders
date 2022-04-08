<?php
include('CsvReader.php');
// Class import
include('Order.php');
include('CsvReader.php');
include('OrderManager.php');

$CsvReader = new CsvReader();
$OrderManager = new OrderManager();
$CsvReader->read_csv("sample_order.csv");
class GeneralManager
{
}
