<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");

$uberX = new $uberX("ZBS999", new account("Andres Herrera, "AND876"), Chevrolet, Spark);
$uberX->printDataCar();

$uberPool= new $uberPool("YZL367", new account("Andrea Jimenez, "ANDA567"), Dodge, Attitude);
$uberPool->printDataCar();


?>