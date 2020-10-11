<?php

use FightTheIce\Exceptions\BadFunctionCallException;

class ZZchaosZZ {
    public function throwBadFunctionCallException() {
        throw new BadFunctionCallException('some message');
    }
}