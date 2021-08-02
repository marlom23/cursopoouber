<?php
require_once('car.php');
class UberVan extends Car
{
    public::__construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__constructor($license, $driver);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;
        
    }
}

?>