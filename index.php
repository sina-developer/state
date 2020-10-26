<?php


require("./autoload.php");

use StatePattern\Context;

use StatePattern\States\CancelledState;
use StatePattern\States\PendingState;
use StatePattern\States\DoneState;

$cart = new Context();

$cancel = new CancelledState();
$pending = new PendingState();
$done = new DoneState();

$cart->setState($cancel);
$cart->setState($pending);
$cart->setState($done);