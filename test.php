<?php

include 'vendor/autoload.php';

class TestExceptionsCrappyTestSuite {
    public function causeBadFunctionCallException() {
        throw new FightTheIce\Exceptions\BadFunctionCallException('some exception', 1);
    }
}

$test = new TestExceptionsCrappyTestSuite();
