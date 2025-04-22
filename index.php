<?php

// constants

define("STATUS_PAID", "paid");

var_dump(STATUS_PAID, defined("STATUS_PAID"), defined("STATUS_PENDING"));

const STATUS_PENDING = "pending";

var_dump(STATUS_PENDING, defined("STATUS_PENDING"));

// if(true) {
//     define("STATUS_DECLINED", "declined"); GOOD
// }else {
//     const STATUS_APPROVED = "approved"; ERROR
// }

$foo = "bar";
$$foo = "buz";
echo $bar; // output buz