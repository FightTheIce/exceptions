<?php

class ExceptionsTest extends \PHPUnit\Framework\TestCase
{

    public function testBadFunctionCallExceptionFightTheIce_Exceptions_BadFunctionCallExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\BadFunctionCallException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
    }

    public function testBadFunctionCallExceptionBadFunctionCallExceptionException()
    {
        $this->expectException(\BadFunctionCallException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
    }

    public function testBadFunctionCallExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
    }

    public function testBadFunctionCallExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
    }

    public function testBadFunctionCallExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadFunctionCallException();
    }

    public function testBadMethodCallExceptionFightTheIce_Exceptions_BadMethodCallExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\BadMethodCallException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testBadMethodCallExceptionBadMethodCallExceptionException()
    {
        $this->expectException(\BadMethodCallException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testBadMethodCallExceptionBadFunctionCallExceptionException()
    {
        $this->expectException(\BadFunctionCallException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testBadMethodCallExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testBadMethodCallExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testBadMethodCallExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwBadMethodCallException();
    }

    public function testDomainExceptionFightTheIce_Exceptions_DomainExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\DomainException::class);
        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
    }

    public function testDomainExceptionDomainExceptionException()
    {
        $this->expectException(\DomainException::class);
        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
    }

    public function testDomainExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
    }

    public function testDomainExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
    }

    public function testDomainExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwDomainException();
    }

    public function testInvalidArgumentExceptionFightTheIce_Exceptions_InvalidArgumentExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\InvalidArgumentException::class);
        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
    }

    public function testInvalidArgumentExceptionInvalidArgumentExceptionException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
    }

    public function testInvalidArgumentExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
    }

    public function testInvalidArgumentExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
    }

    public function testInvalidArgumentExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwInvalidArgumentException();
    }

    public function testLengthExceptionFightTheIce_Exceptions_LengthExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\LengthException::class);
        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
    }

    public function testLengthExceptionLengthExceptionException()
    {
        $this->expectException(\LengthException::class);
        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
    }

    public function testLengthExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
    }

    public function testLengthExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
    }

    public function testLengthExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwLengthException();
    }

    public function testLogicExceptionFightTheIce_Exceptions_LogicExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
    }

    public function testLogicExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
    }

    public function testLogicExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
    }

    public function testLogicExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwLogicException();
    }

    public function testOutOfBoundsExceptionFightTheIce_Exceptions_OutOfBoundsExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\OutOfBoundsException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
    }

    public function testOutOfBoundsExceptionOutOfBoundsExceptionException()
    {
        $this->expectException(\OutOfBoundsException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
    }

    public function testOutOfBoundsExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
    }

    public function testOutOfBoundsExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
    }

    public function testOutOfBoundsExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfBoundsException();
    }

    public function testOutOfRangeExceptionFightTheIce_Exceptions_OutOfRangeExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\OutOfRangeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
    }

    public function testOutOfRangeExceptionOutOfRangeExceptionException()
    {
        $this->expectException(\OutOfRangeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
    }

    public function testOutOfRangeExceptionLogicExceptionException()
    {
        $this->expectException(\LogicException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
    }

    public function testOutOfRangeExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
    }

    public function testOutOfRangeExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwOutOfRangeException();
    }

    public function testOverflowExceptionFightTheIce_Exceptions_OverflowExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\OverflowException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
    }

    public function testOverflowExceptionOverflowExceptionException()
    {
        $this->expectException(\OverflowException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
    }

    public function testOverflowExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
    }

    public function testOverflowExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
    }

    public function testOverflowExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwOverflowException();
    }

    public function testRangeExceptionFightTheIce_Exceptions_RangeExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\RangeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
    }

    public function testRangeExceptionRangeExceptionException()
    {
        $this->expectException(\RangeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
    }

    public function testRangeExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
    }

    public function testRangeExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
    }

    public function testRangeExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwRangeException();
    }

    public function testRuntimeExceptionFightTheIce_Exceptions_RuntimeExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
    }

    public function testRuntimeExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
    }

    public function testRuntimeExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
    }

    public function testRuntimeExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwRuntimeException();
    }

    public function testUnderflowExceptionFightTheIce_Exceptions_UnderflowExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\UnderflowException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
    }

    public function testUnderflowExceptionUnderflowExceptionException()
    {
        $this->expectException(\UnderflowException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
    }

    public function testUnderflowExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
    }

    public function testUnderflowExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
    }

    public function testUnderflowExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnderflowException();
    }

    public function testUnexpectedValueExceptionFightTheIce_Exceptions_UnexpectedValueExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\UnexpectedValueException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
    }

    public function testUnexpectedValueExceptionUnexpectedValueExceptionException()
    {
        $this->expectException(\UnexpectedValueException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
    }

    public function testUnexpectedValueExceptionRuntimeExceptionException()
    {
        $this->expectException(\RuntimeException::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
    }

    public function testUnexpectedValueExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
    }

    public function testUnexpectedValueExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwUnexpectedValueException();
    }

    public function testExceptionFightTheIce_Exceptions_ExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwException();
    }

    public function testExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwException();
    }

    public function testExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwException();
    }

    public function testErrorExceptionFightTheIce_Exceptions_ErrorExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\ErrorException::class);
        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
    }

    public function testErrorExceptionErrorExceptionException()
    {
        $this->expectException(\ErrorException::class);
        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
    }

    public function testErrorExceptionExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
    }

    public function testErrorExceptionFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwErrorException();
    }

    public function testErrorFightTheIce_Exceptions_ErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwError();
    }

    public function testErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwError();
    }

    public function testErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwError();
    }

    public function testArgumentCountErrorFightTheIce_Exceptions_ArgumentCountErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\ArgumentCountError::class);
        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
    }

    public function testArgumentCountErrorArgumentCountErrorException()
    {
        $this->expectException(\ArgumentCountError::class);
        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
    }

    public function testArgumentCountErrorTypeErrorException()
    {
        $this->expectException(\TypeError::class);
        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
    }

    public function testArgumentCountErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
    }

    public function testArgumentCountErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwArgumentCountError();
    }

    public function testArithmeticErrorFightTheIce_Exceptions_ArithmeticErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\ArithmeticError::class);
        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
    }

    public function testArithmeticErrorArithmeticErrorException()
    {
        $this->expectException(\ArithmeticError::class);
        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
    }

    public function testArithmeticErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
    }

    public function testArithmeticErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwArithmeticError();
    }

    public function testAssertionErrorFightTheIce_Exceptions_AssertionErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\AssertionError::class);
        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
    }

    public function testAssertionErrorAssertionErrorException()
    {
        $this->expectException(\AssertionError::class);
        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
    }

    public function testAssertionErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
    }

    public function testAssertionErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwAssertionError();
    }

    public function testDivisionByZeroErrorFightTheIce_Exceptions_DivisionByZeroErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\DivisionByZeroError::class);
        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
    }

    public function testDivisionByZeroErrorDivisionByZeroErrorException()
    {
        $this->expectException(\DivisionByZeroError::class);
        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
    }

    public function testDivisionByZeroErrorArithmeticErrorException()
    {
        $this->expectException(\ArithmeticError::class);
        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
    }

    public function testDivisionByZeroErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
    }

    public function testDivisionByZeroErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwDivisionByZeroError();
    }

    public function testCompileErrorFightTheIce_Exceptions_CompileErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\CompileError::class);
        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
    }

    public function testCompileErrorCompileErrorException()
    {
        $this->expectException(\CompileError::class);
        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
    }

    public function testCompileErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
    }

    public function testCompileErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwCompileError();
    }

    public function testParseErrorFightTheIce_Exceptions_ParseErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\ParseError::class);
        $choas = new ZZchoasZZ;
        $choas->throwParseError();
    }

    public function testParseErrorParseErrorException()
    {
        $this->expectException(\ParseError::class);
        $choas = new ZZchoasZZ;
        $choas->throwParseError();
    }

    public function testParseErrorCompileErrorException()
    {
        $this->expectException(\CompileError::class);
        $choas = new ZZchoasZZ;
        $choas->throwParseError();
    }

    public function testParseErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwParseError();
    }

    public function testParseErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwParseError();
    }

    public function testTypeErrorFightTheIce_Exceptions_TypeErrorException()
    {
        $this->expectException(\FightTheIce\Exceptions\TypeError::class);
        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
    }

    public function testTypeErrorTypeErrorException()
    {
        $this->expectException(\TypeError::class);
        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
    }

    public function testTypeErrorErrorException()
    {
        $this->expectException(\Error::class);
        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
    }

    public function testTypeErrorFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwTypeError();
    }

    public function testFileSystem_FileNotFoundFightTheIce_Exceptions_FileSystem_FileNotFoundException()
    {
        $this->expectException(\FightTheIce\Exceptions\FileSystem\FileNotFound::class);
        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFound();
    }

    public function testFileSystem_FileNotFoundFightTheIce_Exceptions_ErrorExceptionException()
    {
        $this->expectException(\FightTheIce\Exceptions\ErrorException::class);
        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFound();
    }

    public function testFileSystem_FileNotFoundErrorExceptionException()
    {
        $this->expectException(\ErrorException::class);
        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFound();
    }

    public function testFileSystem_FileNotFoundExceptionException()
    {
        $this->expectException(\Exception::class);
        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFound();
    }

    public function testFileSystem_FileNotFoundFightTheIce_Exceptions_ExceptionsInterfaceException()
    {
        $this->expectException(\FightTheIce\Exceptions\ExceptionsInterface::class);
        $choas = new ZZchoasZZ;
        $choas->throwFileSystem_FileNotFound();
    }


}
