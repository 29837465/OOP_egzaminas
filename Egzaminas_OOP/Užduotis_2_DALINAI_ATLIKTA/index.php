<?php

include_once 'CinemaTicket.php';
include_once 'StandardPriceCalculator.php';
include_once 'SubscriberPriceCalculator.php';
include_once 'NewCustomerPriceCalculator.php';
include_once 'OrderProcessor.php';

$standartPrice = new StandardPriceCalculator();
$subscriberPrice = new SubscriberPriceCalculator();
$newCustomerPrice = new NewCustomerPriceCalculator();

var_dump(new OrderProcessor([14, 10], $subscriberPrice)->orderPrice());