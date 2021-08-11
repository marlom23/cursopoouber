<?php
require_once('car.php');
class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($driver, $license, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($driver, $license);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;
        
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {
        if ($passenger == 6)
        {
            $this->passenger = $passenger;
        }
        else
        {
            echo "Necesitas asignar 6 pasajeros";
        }
    }

    public function printDataCar()
    {
        echo nl2br("
        License: $this->license
        Driver: {$this->driver->name}
        Document: {$this->driver->document}
        Number Passenger: $this->passenger
    
        ");
    }


}

?>