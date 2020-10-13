<?php

namespace FightTheIce\Exceptions;

trait ComponentExceptionTrait
{
    protected $componentName = 'UNKNOWN';

    public function getComponentName()
    {
        return $this->componentName;
    }

    public function setComponentName($component)
    {
        $this->componentName = $component;
    }
}
