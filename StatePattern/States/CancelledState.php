<?php

namespace StatePattern\States;

use StatePattern\abstracts\State;

class CancelledState extends State{
    protected function setPurchaseState(){
        $this->state = "Cancelled";
    }
}