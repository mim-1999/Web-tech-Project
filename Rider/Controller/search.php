<?php

require_once 'Model/model.php';

if (isset($_POST['search'])) 
{
    $orders = searchOrder($_POST['id']);
    require 'displayOrder.php';
}
?>