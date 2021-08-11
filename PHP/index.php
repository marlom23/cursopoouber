<?php

require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");
require_once("uberVan.php");

$uberX = new UberX( new Account("Andres Herrera","AND876"),"ZBS999", "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();



$uberPool= new UberPool( new Account("Andrea Jimenez", "ANDA567"), "YZL367" , "Dodge", "Attitude");
$uberPool->setPassenger(4);
$uberPool->printDataCar();

$uberVan= new UberVan(new Account("Fernando Lopez", "FELM816"), "QEZ277", "Mercedes Benz", "Piel");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

?>