<?php

namespace FightTheIce\Exceptions;

trait ComponentExceptionTrait
{

    protected $component = 'UNKNOWN';

    public function getComponent()
    {
        return $this->component;
    }


}
