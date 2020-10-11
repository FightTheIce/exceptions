<?php
/**
 * Fight The Ice Core Underflow Exception.
 *
 * This exception is thrown when performing an invalid operation on an empty
 * container, such as removing an element.
 *
 * @see       http://php.net/manual/class.underflowexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use UnderflowException as StandardUnderflowException;

/**
 * Class UnderflowException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class UnderflowException extends StandardUnderflowException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
