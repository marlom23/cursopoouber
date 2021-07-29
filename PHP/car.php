<?php

class Car
{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __constructor($driver, $license)
    {
         $this->driver = $driver;
         $this->license = $license;
    }

    public function printDataCar()
    {
        echo"license is:".$this->license."driver:".$this->driver->name."and the document is:".$this->driver->document;
    }
    
}
?>