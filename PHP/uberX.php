<?php
require_once('car.php');
class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($driver, $license, $brand, $model)
    {
        parent::__construct($driver, $license);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        echo nl2br("
        License: $this->license
        Driver: {$this->driver->name}
        Document: {$this->driver->document}
        Number passenger: $this->passenger
        Model: $this->model
        Brand:: $this->brand
        ");
    }
}

?>