<?php

namespace StatePattern;

use StatePattern\abstracts\State;

class Context {
    private State $state;

    public function setState(State $state){
        $this->state = $state;
        echo "state changed to : ".$this->getState()."\n";
    }

    public function getState(){
        return $this->state->getPurchaseState();
    }
}