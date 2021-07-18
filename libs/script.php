<?php

    require_once 'Products.php';
    $conn = new Products();
    $meat = $conn->getMeatProd();
    print_r($meat);




