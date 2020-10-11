<?php
/**
 * Exceptions Test
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

/**
 * Class ExceptionsTest
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class ExceptionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test creation of Exceptions.
     *
     * @covers       \FightTheIce\Exceptions\ModuleExceptionTrait::__construct
     *
     * @dataProvider exceptionsCreationDataProvider
     *
     * @since        0.1.0
     *
     * @param string $moduleName        Name of the module to pass into the
     *                                  exception.
     * @param string $createClass       Exception class to create.
     * @param array  $expectedToCatch   Array of exceptions that were caught.
     */
    public function testExceptionsCreation($moduleName, $createClass, $expectedToCatch)
    {

        // What follows is a horrible nesting structure that tries to catch
        // exceptions at all levels and builds an array with the names of the
        // exceptions it caught.
        // Apparently, PHP does not like you to catch a variable exception...

        $caught = [];
        try {
            try {
                try {
                    try {
                        try {
                            $exception = new $createClass();
                            /** @var \FightTheIce\Exceptions\ExceptionInterface $exception */
                            $exception->setModule($moduleName);
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\AssertionFailedException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\AssertionFailedException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\BadFunctionCallException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\BadFunctionCallException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\BadMethodCallException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\BadMethodCallException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\DomainException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\DomainException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\InvalidArgumentException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\InvalidArgumentException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\LengthException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\LengthException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\LogicException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\LogicException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\OutOfBoundsException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\OutOfBoundsException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\OutOfRangeException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\OutOfRangeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\OverflowException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\OverflowException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\RangeException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\RangeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\RuntimeException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\RuntimeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\UnderflowException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\UnderflowException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\FightTheIce\Exceptions\UnexpectedValueException $exception) {
                            $caught[] = '\FightTheIce\Exceptions\UnexpectedValueException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        }
                    } catch (\FightTheIce\Exceptions\ExceptionInterface $exception) {
                        $caught[] = '\FightTheIce\Exceptions\ExceptionInterface';
                        $this->assertEquals(
                            $moduleName,
                            $exception->getModule()
                        );
                        throw $exception;
                    }
                } catch (\BadMethodCallException $exception) {
                    $caught[] = '\BadMethodCallException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\BadFunctionCallException $exception) {
                    $caught[] = '\BadFunctionCallException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\DomainException $exception) {
                    $caught[] = '\DomainException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\InvalidArgumentException $exception) {
                    $caught[] = '\InvalidArgumentException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\LengthException $exception) {
                    $caught[] = '\LengthException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OutOfBoundsException $exception) {
                    $caught[] = '\OutOfBoundsException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OutOfRangeException $exception) {
                    $caught[] = '\OutOfRangeException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OverflowException $exception) {
                    $caught[] = '\OverflowException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\RangeException $exception) {
                    $caught[] = '\RangeException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\UnderflowException $exception) {
                    $caught[] = '\UnderflowException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\UnexpectedValueException $exception) {
                    $caught[] = '\UnexpectedValueException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                }
            } catch (\LogicException $exception) {
                $caught[] = '\LogicException';
                $this->assertEquals($moduleName, $exception->getModule());
                throw $exception;
            } catch (\RuntimeException $exception) {
                $caught[] = '\RuntimeException';
                $this->assertEquals($moduleName, $exception->getModule());
                throw $exception;
            }
        } catch (\Exception $exception) {
            $caught[] = '\Exception';
            $this->assertEquals($moduleName, $exception->getModule());
        }
        $this->assertEquals($expectedToCatch, $caught);
    }

    /**
     * Provide testable data to the testFeatureSupport() method.
     *
     * @since 0.1.0
     *
     * @return array
     */
    public function exceptionsCreationDataProvider()
    {
        return [
            // string $moduleName, string $createClass, array $expectedToCatch
            [
                'BadFunctionCallException Test Module',
                '\FightTheIce\Exceptions\BadFunctionCallException',
                [
                    '\FightTheIce\Exceptions\BadFunctionCallException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\BadFunctionCallException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'BadMethodCallException Test Module',
                '\FightTheIce\Exceptions\BadMethodCallException',
                [
                    '\FightTheIce\Exceptions\BadMethodCallException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\BadMethodCallException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'DomainException Test Module',
                '\FightTheIce\Exceptions\DomainException',
                [
                    '\FightTheIce\Exceptions\DomainException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\DomainException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'InvalidArgumentException Test Module',
                '\FightTheIce\Exceptions\InvalidArgumentException',
                [
                    '\FightTheIce\Exceptions\InvalidArgumentException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\InvalidArgumentException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'LengthException Test Module',
                '\FightTheIce\Exceptions\LengthException',
                [
                    '\FightTheIce\Exceptions\LengthException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\LengthException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'LogicException Test Module',
                '\FightTheIce\Exceptions\LogicException',
                [
                    '\FightTheIce\Exceptions\LogicException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'OutOfBoundsException Test Module',
                '\FightTheIce\Exceptions\OutOfBoundsException',
                [
                    '\FightTheIce\Exceptions\OutOfBoundsException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\OutOfBoundsException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'OutOfRangeException Test Module',
                '\FightTheIce\Exceptions\OutOfRangeException',
                [
                    '\FightTheIce\Exceptions\OutOfRangeException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\OutOfRangeException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'OverflowException Test Module',
                '\FightTheIce\Exceptions\OverflowException',
                [
                    '\FightTheIce\Exceptions\OverflowException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\OverflowException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'RangeException Test Module',
                '\FightTheIce\Exceptions\RangeException',
                [
                    '\FightTheIce\Exceptions\RangeException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\RangeException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'RuntimeException Test Module',
                '\FightTheIce\Exceptions\RuntimeException',
                [
                    '\FightTheIce\Exceptions\RuntimeException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'UnderflowException Test Module',
                '\FightTheIce\Exceptions\UnderflowException',
                [
                    '\FightTheIce\Exceptions\UnderflowException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\UnderflowException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'UnexpectedValueException Test Module',
                '\FightTheIce\Exceptions\UnexpectedValueException',
                [
                    '\FightTheIce\Exceptions\UnexpectedValueException',
                    '\FightTheIce\Exceptions\ExceptionInterface',
                    '\UnexpectedValueException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
        ];
    }

    /**
     * Test setting the module name from a Bright Nucleus exception.
     *
     * @covers \FightTheIce\Exceptions\ModuleExceptionTrait::getModule
     * @covers \FightTheIce\Exceptions\ModuleExceptionTrait::setModule
     */
    public function testSetModule()
    {
        try {
            $exception = new \FightTheIce\Exceptions\RuntimeException(
                '',
                0,
                null
            );
            $exception->setModule('a_module_name');
            throw $exception;
        } catch (\Exception $exception) {
            /** @var \FightTheIce\Exceptions\ExceptionInterface $exception */
            $this->assertEquals(
                'a_module_name',
                $exception->getModule()
            );
        }
    }
}
