<?php
require_once('car.php');
class UberX extends Car
{
    public $brand;
    public $model;

    public function__construct($license, $driver, $brand, $model)
    {
        parent::__constructor($license, $driver);
        $this->brand = $brand;
        $this-> model = $model;
    }
}

?>