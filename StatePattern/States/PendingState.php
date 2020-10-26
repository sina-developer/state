<?php

namespace StatePattern\States;

use StatePattern\abstracts\State;

class PendingState extends State{
    public function setPurchaseState(){
        $this->state = "Pending";
    }
}