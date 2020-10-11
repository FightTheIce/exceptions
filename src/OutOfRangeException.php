<?php
/**
 * Fight The Ice Core Out Of Range Exception.
 *
 * This exception is thrown when an illegal index was requested. This
 * represents errors that should be detected at compile time.
 *
 * @see       http://php.net/manual/class.outofrangeexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use OutOfRangeException as StandardOutOfRangeException;

/**
 * Class OutOfRangeException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class OutOfRangeException extends StandardOutOfRangeException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
