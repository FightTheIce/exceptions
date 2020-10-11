<?php

class ExceptionsTest extends \PHPUnit\Framework\TestCase
{

    public function test_BadFunctionCallException_FightTheIce_Exceptions_BadFunctionCallException()
    {
        $this->expectException(\FightTheIce\Exceptions\BadFunctionCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
        /*
        FightTheIce\Exceptions\BadFunctionCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadFunctionCallException
            [1] => BadFunctionCallException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadFunctionCallException_BadFunctionCallException()
    {
        $this->expectException(\BadFunctionCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
        /*
        FightTheIce\Exceptions\BadFunctionCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadFunctionCallException
            [1] => BadFunctionCallException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadFunctionCallException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
        /*
        FightTheIce\Exceptions\BadFunctionCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadFunctionCallException
            [1] => BadFunctionCallException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadFunctionCallException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
        /*
        FightTheIce\Exceptions\BadFunctionCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadFunctionCallException
            [1] => BadFunctionCallException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadFunctionCallException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
        /*
        FightTheIce\Exceptions\BadFunctionCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadFunctionCallException
            [1] => BadFunctionCallException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_FightTheIce_Exceptions_BadMethodCallException()
    {
        $this->expectException(\FightTheIce\Exceptions\BadMethodCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_BadMethodCallException()
    {
        $this->expectException(\BadMethodCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_BadFunctionCallException()
    {
        $this->expectException(\BadFunctionCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_BadMethodCallException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
        /*
        FightTheIce\Exceptions\BadMethodCallException
        Array
        (
            [0] => FightTheIce\Exceptions\BadMethodCallException
            [1] => BadMethodCallException
            [2] => BadFunctionCallException
            [3] => LogicException
            [4] => Exception
            [5] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DomainException_FightTheIce_Exceptions_DomainException()
    {
        $this->expectException(\FightTheIce\Exceptions\DomainException::class);

        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
        /*
        FightTheIce\Exceptions\DomainException
        Array
        (
            [0] => FightTheIce\Exceptions\DomainException
            [1] => DomainException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DomainException_DomainException()
    {
        $this->expectException(\DomainException::class);

        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
        /*
        FightTheIce\Exceptions\DomainException
        Array
        (
            [0] => FightTheIce\Exceptions\DomainException
            [1] => DomainException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DomainException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
        /*
        FightTheIce\Exceptions\DomainException
        Array
        (
            [0] => FightTheIce\Exceptions\DomainException
            [1] => DomainException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DomainException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
        /*
        FightTheIce\Exceptions\DomainException
        Array
        (
            [0] => FightTheIce\Exceptions\DomainException
            [1] => DomainException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DomainException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
        /*
        FightTheIce\Exceptions\DomainException
        Array
        (
            [0] => FightTheIce\Exceptions\DomainException
            [1] => DomainException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_InvalidArgumentException_FightTheIce_Exceptions_InvalidArgumentException()
    {
        $this->expectException(\FightTheIce\Exceptions\InvalidArgumentException::class);

        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
        /*
        FightTheIce\Exceptions\InvalidArgumentException
        Array
        (
            [0] => FightTheIce\Exceptions\InvalidArgumentException
            [1] => InvalidArgumentException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_InvalidArgumentException_InvalidArgumentException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
        /*
        FightTheIce\Exceptions\InvalidArgumentException
        Array
        (
            [0] => FightTheIce\Exceptions\InvalidArgumentException
            [1] => InvalidArgumentException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_InvalidArgumentException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
        /*
        FightTheIce\Exceptions\InvalidArgumentException
        Array
        (
            [0] => FightTheIce\Exceptions\InvalidArgumentException
            [1] => InvalidArgumentException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_InvalidArgumentException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
        /*
        FightTheIce\Exceptions\InvalidArgumentException
        Array
        (
            [0] => FightTheIce\Exceptions\InvalidArgumentException
            [1] => InvalidArgumentException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_InvalidArgumentException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
        /*
        FightTheIce\Exceptions\InvalidArgumentException
        Array
        (
            [0] => FightTheIce\Exceptions\InvalidArgumentException
            [1] => InvalidArgumentException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LengthException_FightTheIce_Exceptions_LengthException()
    {
        $this->expectException(\FightTheIce\Exceptions\LengthException::class);

        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
        /*
        FightTheIce\Exceptions\LengthException
        Array
        (
            [0] => FightTheIce\Exceptions\LengthException
            [1] => LengthException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LengthException_LengthException()
    {
        $this->expectException(\LengthException::class);

        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
        /*
        FightTheIce\Exceptions\LengthException
        Array
        (
            [0] => FightTheIce\Exceptions\LengthException
            [1] => LengthException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LengthException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
        /*
        FightTheIce\Exceptions\LengthException
        Array
        (
            [0] => FightTheIce\Exceptions\LengthException
            [1] => LengthException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LengthException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
        /*
        FightTheIce\Exceptions\LengthException
        Array
        (
            [0] => FightTheIce\Exceptions\LengthException
            [1] => LengthException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LengthException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
        /*
        FightTheIce\Exceptions\LengthException
        Array
        (
            [0] => FightTheIce\Exceptions\LengthException
            [1] => LengthException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LogicException_FightTheIce_Exceptions_LogicException()
    {
        $this->expectException(\FightTheIce\Exceptions\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
        /*
        FightTheIce\Exceptions\LogicException
        Array
        (
            [0] => FightTheIce\Exceptions\LogicException
            [1] => LogicException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LogicException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
        /*
        FightTheIce\Exceptions\LogicException
        Array
        (
            [0] => FightTheIce\Exceptions\LogicException
            [1] => LogicException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LogicException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
        /*
        FightTheIce\Exceptions\LogicException
        Array
        (
            [0] => FightTheIce\Exceptions\LogicException
            [1] => LogicException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_LogicException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
        /*
        FightTheIce\Exceptions\LogicException
        Array
        (
            [0] => FightTheIce\Exceptions\LogicException
            [1] => LogicException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfBoundsException_FightTheIce_Exceptions_OutOfBoundsException()
    {
        $this->expectException(\FightTheIce\Exceptions\OutOfBoundsException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
        /*
        FightTheIce\Exceptions\OutOfBoundsException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfBoundsException
            [1] => OutOfBoundsException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfBoundsException_OutOfBoundsException()
    {
        $this->expectException(\OutOfBoundsException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
        /*
        FightTheIce\Exceptions\OutOfBoundsException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfBoundsException
            [1] => OutOfBoundsException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfBoundsException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
        /*
        FightTheIce\Exceptions\OutOfBoundsException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfBoundsException
            [1] => OutOfBoundsException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfBoundsException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
        /*
        FightTheIce\Exceptions\OutOfBoundsException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfBoundsException
            [1] => OutOfBoundsException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfBoundsException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
        /*
        FightTheIce\Exceptions\OutOfBoundsException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfBoundsException
            [1] => OutOfBoundsException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfRangeException_FightTheIce_Exceptions_OutOfRangeException()
    {
        $this->expectException(\FightTheIce\Exceptions\OutOfRangeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
        /*
        FightTheIce\Exceptions\OutOfRangeException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfRangeException
            [1] => OutOfRangeException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfRangeException_OutOfRangeException()
    {
        $this->expectException(\OutOfRangeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
        /*
        FightTheIce\Exceptions\OutOfRangeException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfRangeException
            [1] => OutOfRangeException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfRangeException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
        /*
        FightTheIce\Exceptions\OutOfRangeException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfRangeException
            [1] => OutOfRangeException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfRangeException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
        /*
        FightTheIce\Exceptions\OutOfRangeException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfRangeException
            [1] => OutOfRangeException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OutOfRangeException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
        /*
        FightTheIce\Exceptions\OutOfRangeException
        Array
        (
            [0] => FightTheIce\Exceptions\OutOfRangeException
            [1] => OutOfRangeException
            [2] => LogicException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OverflowException_FightTheIce_Exceptions_OverflowException()
    {
        $this->expectException(\FightTheIce\Exceptions\OverflowException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
        /*
        FightTheIce\Exceptions\OverflowException
        Array
        (
            [0] => FightTheIce\Exceptions\OverflowException
            [1] => OverflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OverflowException_OverflowException()
    {
        $this->expectException(\OverflowException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
        /*
        FightTheIce\Exceptions\OverflowException
        Array
        (
            [0] => FightTheIce\Exceptions\OverflowException
            [1] => OverflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OverflowException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
        /*
        FightTheIce\Exceptions\OverflowException
        Array
        (
            [0] => FightTheIce\Exceptions\OverflowException
            [1] => OverflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OverflowException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
        /*
        FightTheIce\Exceptions\OverflowException
        Array
        (
            [0] => FightTheIce\Exceptions\OverflowException
            [1] => OverflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_OverflowException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
        /*
        FightTheIce\Exceptions\OverflowException
        Array
        (
            [0] => FightTheIce\Exceptions\OverflowException
            [1] => OverflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RangeException_FightTheIce_Exceptions_RangeException()
    {
        $this->expectException(\FightTheIce\Exceptions\RangeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
        /*
        FightTheIce\Exceptions\RangeException
        Array
        (
            [0] => FightTheIce\Exceptions\RangeException
            [1] => RangeException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RangeException_RangeException()
    {
        $this->expectException(\RangeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
        /*
        FightTheIce\Exceptions\RangeException
        Array
        (
            [0] => FightTheIce\Exceptions\RangeException
            [1] => RangeException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RangeException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
        /*
        FightTheIce\Exceptions\RangeException
        Array
        (
            [0] => FightTheIce\Exceptions\RangeException
            [1] => RangeException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RangeException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
        /*
        FightTheIce\Exceptions\RangeException
        Array
        (
            [0] => FightTheIce\Exceptions\RangeException
            [1] => RangeException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RangeException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
        /*
        FightTheIce\Exceptions\RangeException
        Array
        (
            [0] => FightTheIce\Exceptions\RangeException
            [1] => RangeException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RuntimeException_FightTheIce_Exceptions_RuntimeException()
    {
        $this->expectException(\FightTheIce\Exceptions\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
        /*
        FightTheIce\Exceptions\RuntimeException
        Array
        (
            [0] => FightTheIce\Exceptions\RuntimeException
            [1] => RuntimeException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RuntimeException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
        /*
        FightTheIce\Exceptions\RuntimeException
        Array
        (
            [0] => FightTheIce\Exceptions\RuntimeException
            [1] => RuntimeException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RuntimeException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
        /*
        FightTheIce\Exceptions\RuntimeException
        Array
        (
            [0] => FightTheIce\Exceptions\RuntimeException
            [1] => RuntimeException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_RuntimeException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
        /*
        FightTheIce\Exceptions\RuntimeException
        Array
        (
            [0] => FightTheIce\Exceptions\RuntimeException
            [1] => RuntimeException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnderflowException_FightTheIce_Exceptions_UnderflowException()
    {
        $this->expectException(\FightTheIce\Exceptions\UnderflowException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
        /*
        FightTheIce\Exceptions\UnderflowException
        Array
        (
            [0] => FightTheIce\Exceptions\UnderflowException
            [1] => UnderflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnderflowException_UnderflowException()
    {
        $this->expectException(\UnderflowException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
        /*
        FightTheIce\Exceptions\UnderflowException
        Array
        (
            [0] => FightTheIce\Exceptions\UnderflowException
            [1] => UnderflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnderflowException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
        /*
        FightTheIce\Exceptions\UnderflowException
        Array
        (
            [0] => FightTheIce\Exceptions\UnderflowException
            [1] => UnderflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnderflowException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
        /*
        FightTheIce\Exceptions\UnderflowException
        Array
        (
            [0] => FightTheIce\Exceptions\UnderflowException
            [1] => UnderflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnderflowException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
        /*
        FightTheIce\Exceptions\UnderflowException
        Array
        (
            [0] => FightTheIce\Exceptions\UnderflowException
            [1] => UnderflowException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnexpectedValueException_FightTheIce_Exceptions_UnexpectedValueException()
    {
        $this->expectException(\FightTheIce\Exceptions\UnexpectedValueException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
        /*
        FightTheIce\Exceptions\UnexpectedValueException
        Array
        (
            [0] => FightTheIce\Exceptions\UnexpectedValueException
            [1] => UnexpectedValueException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnexpectedValueException_UnexpectedValueException()
    {
        $this->expectException(\UnexpectedValueException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
        /*
        FightTheIce\Exceptions\UnexpectedValueException
        Array
        (
            [0] => FightTheIce\Exceptions\UnexpectedValueException
            [1] => UnexpectedValueException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnexpectedValueException_RuntimeException()
    {
        $this->expectException(\RuntimeException::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
        /*
        FightTheIce\Exceptions\UnexpectedValueException
        Array
        (
            [0] => FightTheIce\Exceptions\UnexpectedValueException
            [1] => UnexpectedValueException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnexpectedValueException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
        /*
        FightTheIce\Exceptions\UnexpectedValueException
        Array
        (
            [0] => FightTheIce\Exceptions\UnexpectedValueException
            [1] => UnexpectedValueException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_UnexpectedValueException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
        /*
        FightTheIce\Exceptions\UnexpectedValueException
        Array
        (
            [0] => FightTheIce\Exceptions\UnexpectedValueException
            [1] => UnexpectedValueException
            [2] => RuntimeException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Exception_FightTheIce_Exceptions_Exception()
    {
        $this->expectException(\FightTheIce\Exceptions\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwException();
        /*
        FightTheIce\Exceptions\Exception
        Array
        (
            [0] => FightTheIce\Exceptions\Exception
            [1] => Exception
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Exception_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwException();
        /*
        FightTheIce\Exceptions\Exception
        Array
        (
            [0] => FightTheIce\Exceptions\Exception
            [1] => Exception
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Exception_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwException();
        /*
        FightTheIce\Exceptions\Exception
        Array
        (
            [0] => FightTheIce\Exceptions\Exception
            [1] => Exception
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ErrorException_FightTheIce_Exceptions_ErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\ErrorException::class);

        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
        /*
        FightTheIce\Exceptions\ErrorException
        Array
        (
            [0] => FightTheIce\Exceptions\ErrorException
            [1] => ErrorException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ErrorException_ErrorException()
    {
        $this->expectException(\ErrorException::class);

        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
        /*
        FightTheIce\Exceptions\ErrorException
        Array
        (
            [0] => FightTheIce\Exceptions\ErrorException
            [1] => ErrorException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ErrorException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
        /*
        FightTheIce\Exceptions\ErrorException
        Array
        (
            [0] => FightTheIce\Exceptions\ErrorException
            [1] => ErrorException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ErrorException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
        /*
        FightTheIce\Exceptions\ErrorException
        Array
        (
            [0] => FightTheIce\Exceptions\ErrorException
            [1] => ErrorException
            [2] => Exception
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Error_FightTheIce_Exceptions_Error()
    {
        $this->expectException(\FightTheIce\Exceptions\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwError();
        /*
        FightTheIce\Exceptions\Error
        Array
        (
            [0] => FightTheIce\Exceptions\Error
            [1] => Error
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Error_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwError();
        /*
        FightTheIce\Exceptions\Error
        Array
        (
            [0] => FightTheIce\Exceptions\Error
            [1] => Error
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Error_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwError();
        /*
        FightTheIce\Exceptions\Error
        Array
        (
            [0] => FightTheIce\Exceptions\Error
            [1] => Error
            [2] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArgumentCountError_FightTheIce_Exceptions_ArgumentCountError()
    {
        $this->expectException(\FightTheIce\Exceptions\ArgumentCountError::class);

        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
        /*
        FightTheIce\Exceptions\ArgumentCountError
        Array
        (
            [0] => FightTheIce\Exceptions\ArgumentCountError
            [1] => ArgumentCountError
            [2] => TypeError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArgumentCountError_ArgumentCountError()
    {
        $this->expectException(\ArgumentCountError::class);

        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
        /*
        FightTheIce\Exceptions\ArgumentCountError
        Array
        (
            [0] => FightTheIce\Exceptions\ArgumentCountError
            [1] => ArgumentCountError
            [2] => TypeError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArgumentCountError_TypeError()
    {
        $this->expectException(\TypeError::class);

        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
        /*
        FightTheIce\Exceptions\ArgumentCountError
        Array
        (
            [0] => FightTheIce\Exceptions\ArgumentCountError
            [1] => ArgumentCountError
            [2] => TypeError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArgumentCountError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
        /*
        FightTheIce\Exceptions\ArgumentCountError
        Array
        (
            [0] => FightTheIce\Exceptions\ArgumentCountError
            [1] => ArgumentCountError
            [2] => TypeError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArgumentCountError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
        /*
        FightTheIce\Exceptions\ArgumentCountError
        Array
        (
            [0] => FightTheIce\Exceptions\ArgumentCountError
            [1] => ArgumentCountError
            [2] => TypeError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArithmeticError_FightTheIce_Exceptions_ArithmeticError()
    {
        $this->expectException(\FightTheIce\Exceptions\ArithmeticError::class);

        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
        /*
        FightTheIce\Exceptions\ArithmeticError
        Array
        (
            [0] => FightTheIce\Exceptions\ArithmeticError
            [1] => ArithmeticError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArithmeticError_ArithmeticError()
    {
        $this->expectException(\ArithmeticError::class);

        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
        /*
        FightTheIce\Exceptions\ArithmeticError
        Array
        (
            [0] => FightTheIce\Exceptions\ArithmeticError
            [1] => ArithmeticError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArithmeticError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
        /*
        FightTheIce\Exceptions\ArithmeticError
        Array
        (
            [0] => FightTheIce\Exceptions\ArithmeticError
            [1] => ArithmeticError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ArithmeticError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
        /*
        FightTheIce\Exceptions\ArithmeticError
        Array
        (
            [0] => FightTheIce\Exceptions\ArithmeticError
            [1] => ArithmeticError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_AssertionError_FightTheIce_Exceptions_AssertionError()
    {
        $this->expectException(\FightTheIce\Exceptions\AssertionError::class);

        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
        /*
        FightTheIce\Exceptions\AssertionError
        Array
        (
            [0] => FightTheIce\Exceptions\AssertionError
            [1] => AssertionError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_AssertionError_AssertionError()
    {
        $this->expectException(\AssertionError::class);

        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
        /*
        FightTheIce\Exceptions\AssertionError
        Array
        (
            [0] => FightTheIce\Exceptions\AssertionError
            [1] => AssertionError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_AssertionError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
        /*
        FightTheIce\Exceptions\AssertionError
        Array
        (
            [0] => FightTheIce\Exceptions\AssertionError
            [1] => AssertionError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_AssertionError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
        /*
        FightTheIce\Exceptions\AssertionError
        Array
        (
            [0] => FightTheIce\Exceptions\AssertionError
            [1] => AssertionError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DivisionByZeroError_FightTheIce_Exceptions_DivisionByZeroError()
    {
        $this->expectException(\FightTheIce\Exceptions\DivisionByZeroError::class);

        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
        /*
        FightTheIce\Exceptions\DivisionByZeroError
        Array
        (
            [0] => FightTheIce\Exceptions\DivisionByZeroError
            [1] => DivisionByZeroError
            [2] => ArithmeticError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DivisionByZeroError_DivisionByZeroError()
    {
        $this->expectException(\DivisionByZeroError::class);

        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
        /*
        FightTheIce\Exceptions\DivisionByZeroError
        Array
        (
            [0] => FightTheIce\Exceptions\DivisionByZeroError
            [1] => DivisionByZeroError
            [2] => ArithmeticError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DivisionByZeroError_ArithmeticError()
    {
        $this->expectException(\ArithmeticError::class);

        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
        /*
        FightTheIce\Exceptions\DivisionByZeroError
        Array
        (
            [0] => FightTheIce\Exceptions\DivisionByZeroError
            [1] => DivisionByZeroError
            [2] => ArithmeticError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DivisionByZeroError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
        /*
        FightTheIce\Exceptions\DivisionByZeroError
        Array
        (
            [0] => FightTheIce\Exceptions\DivisionByZeroError
            [1] => DivisionByZeroError
            [2] => ArithmeticError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_DivisionByZeroError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
        /*
        FightTheIce\Exceptions\DivisionByZeroError
        Array
        (
            [0] => FightTheIce\Exceptions\DivisionByZeroError
            [1] => DivisionByZeroError
            [2] => ArithmeticError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_CompileError_FightTheIce_Exceptions_CompileError()
    {
        $this->expectException(\FightTheIce\Exceptions\CompileError::class);

        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
        /*
        FightTheIce\Exceptions\CompileError
        Array
        (
            [0] => FightTheIce\Exceptions\CompileError
            [1] => CompileError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_CompileError_CompileError()
    {
        $this->expectException(\CompileError::class);

        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
        /*
        FightTheIce\Exceptions\CompileError
        Array
        (
            [0] => FightTheIce\Exceptions\CompileError
            [1] => CompileError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_CompileError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
        /*
        FightTheIce\Exceptions\CompileError
        Array
        (
            [0] => FightTheIce\Exceptions\CompileError
            [1] => CompileError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_CompileError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
        /*
        FightTheIce\Exceptions\CompileError
        Array
        (
            [0] => FightTheIce\Exceptions\CompileError
            [1] => CompileError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ParseError_FightTheIce_Exceptions_ParseError()
    {
        $this->expectException(\FightTheIce\Exceptions\ParseError::class);

        $choas = new ZZchoasZZ;
        $choas->throwParseError();
        /*
        FightTheIce\Exceptions\ParseError
        Array
        (
            [0] => FightTheIce\Exceptions\ParseError
            [1] => ParseError
            [2] => CompileError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ParseError_ParseError()
    {
        $this->expectException(\ParseError::class);

        $choas = new ZZchoasZZ;
        $choas->throwParseError();
        /*
        FightTheIce\Exceptions\ParseError
        Array
        (
            [0] => FightTheIce\Exceptions\ParseError
            [1] => ParseError
            [2] => CompileError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ParseError_CompileError()
    {
        $this->expectException(\CompileError::class);

        $choas = new ZZchoasZZ;
        $choas->throwParseError();
        /*
        FightTheIce\Exceptions\ParseError
        Array
        (
            [0] => FightTheIce\Exceptions\ParseError
            [1] => ParseError
            [2] => CompileError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ParseError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwParseError();
        /*
        FightTheIce\Exceptions\ParseError
        Array
        (
            [0] => FightTheIce\Exceptions\ParseError
            [1] => ParseError
            [2] => CompileError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_ParseError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwParseError();
        /*
        FightTheIce\Exceptions\ParseError
        Array
        (
            [0] => FightTheIce\Exceptions\ParseError
            [1] => ParseError
            [2] => CompileError
            [3] => Error
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_TypeError_FightTheIce_Exceptions_TypeError()
    {
        $this->expectException(\FightTheIce\Exceptions\TypeError::class);

        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
        /*
        FightTheIce\Exceptions\TypeError
        Array
        (
            [0] => FightTheIce\Exceptions\TypeError
            [1] => TypeError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_TypeError_TypeError()
    {
        $this->expectException(\TypeError::class);

        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
        /*
        FightTheIce\Exceptions\TypeError
        Array
        (
            [0] => FightTheIce\Exceptions\TypeError
            [1] => TypeError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_TypeError_Error()
    {
        $this->expectException(\Error::class);

        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
        /*
        FightTheIce\Exceptions\TypeError
        Array
        (
            [0] => FightTheIce\Exceptions\TypeError
            [1] => TypeError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_TypeError_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
        /*
        FightTheIce\Exceptions\TypeError
        Array
        (
            [0] => FightTheIce\Exceptions\TypeError
            [1] => TypeError
            [2] => Error
            [3] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_FileSystem_FileNotFoundException_FightTheIce_Exceptions_FileSystem_FileNotFoundException()
    {
        $this->expectException(\FightTheIce\Exceptions\FileSystem\FileNotFoundException::class);

        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFoundException();
        /*
        FightTheIce\Exceptions\FileSystem\FileNotFoundException
        Array
        (
            [0] => FightTheIce\Exceptions\FileSystem\FileNotFoundException
            [1] => FightTheIce\Exceptions\ErrorException
            [2] => ErrorException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_FileSystem_FileNotFoundException_FightTheIce_Exceptions_ErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\ErrorException::class);

        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFoundException();
        /*
        FightTheIce\Exceptions\FileSystem\FileNotFoundException
        Array
        (
            [0] => FightTheIce\Exceptions\FileSystem\FileNotFoundException
            [1] => FightTheIce\Exceptions\ErrorException
            [2] => ErrorException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_FileSystem_FileNotFoundException_ErrorException()
    {
        $this->expectException(\ErrorException::class);

        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFoundException();
        /*
        FightTheIce\Exceptions\FileSystem\FileNotFoundException
        Array
        (
            [0] => FightTheIce\Exceptions\FileSystem\FileNotFoundException
            [1] => FightTheIce\Exceptions\ErrorException
            [2] => ErrorException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_FileSystem_FileNotFoundException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFoundException();
        /*
        FightTheIce\Exceptions\FileSystem\FileNotFoundException
        Array
        (
            [0] => FightTheIce\Exceptions\FileSystem\FileNotFoundException
            [1] => FightTheIce\Exceptions\ErrorException
            [2] => ErrorException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_FileSystem_FileNotFoundException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFoundException();
        /*
        FightTheIce\Exceptions\FileSystem\FileNotFoundException
        Array
        (
            [0] => FightTheIce\Exceptions\FileSystem\FileNotFoundException
            [1] => FightTheIce\Exceptions\ErrorException
            [2] => ErrorException
            [3] => Exception
            [4] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_FightTheIce_Exceptions_Programming_ConstructAlreadyRunException()
    {
        $this->expectException(\FightTheIce\Exceptions\Programming\ConstructAlreadyRunException::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_FightTheIce_Exceptions_BadMethodCallException()
    {
        $this->expectException(\FightTheIce\Exceptions\BadMethodCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_BadMethodCallException()
    {
        $this->expectException(\BadMethodCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_BadFunctionCallException()
    {
        $this->expectException(\BadFunctionCallException::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_LogicException()
    {
        $this->expectException(\LogicException::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_Exception()
    {
        $this->expectException(\Exception::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }

    public function test_Programming_ConstructAlreadyRunException_FightTheIce_Exceptions_ExceptionsInterface()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);

        $choas = new ZZchoasZZ;
        $choas->throwProgramming_ConstructAlreadyRunException();
        /*
        FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
        Array
        (
            [0] => FightTheIce\Exceptions\Programming\ConstructAlreadyRunException
            [1] => FightTheIce\Exceptions\BadMethodCallException
            [2] => BadMethodCallException
            [3] => BadFunctionCallException
            [4] => LogicException
            [5] => Exception
            [6] => FightTheIce\Exceptions\ExceptionsInterface
        )
        */
    }


}
