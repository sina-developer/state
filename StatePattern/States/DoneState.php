<?php

namespace StatePattern\States;

use StatePattern\abstracts\State;

class DoneState extends State{
    public function setPurchaseState(){
        $this->state = "Done";
    }
}