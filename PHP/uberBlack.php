<?php
require_once('car.php');
class UberBlack extends Car
{
    public::__constructor($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__constructor($license, $driver);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;
        
    }
}

?>