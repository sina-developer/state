<?php

namespace StatePattern\abstracts;

use StatePattern\Context;

abstract class State{
    protected $state;
    public function __construct(){
        $this->setPurchaseState();
    }
    protected abstract function setPurchaseState();
    public function getPurchaseState(){
        return $this->state;
    }
}