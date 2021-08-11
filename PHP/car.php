<?php

require_once('account.php');

class Car
{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($driver, $license)
    {
         $this->driver = $driver;
         $this->license = $license;
    }

//    public function printDataCar()
  //  {
    //    echo"license is:",$this->license, "driver:", $this->driver->name,$this->driver->document;
   // }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {
        if ($passenger == 4)
        {
            $this->passenger = $passenger;
        }
        else
        {
            echo "Necesitas asignar 4 pasajeros";
        }
    }

    public function printDataCar()
    {
        echo "License: $this->license
        Driver: {$this->document->name}
        Number passenger: $this->passenger
    
        ";
    }
    
}
?>