<?php
require_once('car.php');
class UberBlack extends Car
{
    public function __construct($driver, $license, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($driver, $license);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;

    }
}

?>