<?php
/**
 * Fight The Ice Core Unexpected Value Exception.
 *
 * This exception is thrown if a value does not match with a set of values.
 * Typically this happens when a function calls another function and expects
 * the return value to be of a certain type or value not including arithmetic
 * or buffer related errors.
 *
 * @see       http://php.net/manual/class.unexpectedvalueexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use UnexpectedValueException as StandardUnexpectedValueException;

/**
 * Class UnexpectedValueException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class UnexpectedValueException extends StandardUnexpectedValueException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
