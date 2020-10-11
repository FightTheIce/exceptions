<?php
/**
 * Fight The Ice Core Runtime Exception.
 *
 * This exception is thrown if an error which can only be found on runtime
 * occurs.
 *
 * @see       http://php.net/manual/class.runtimeexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use RuntimeException as StandardRuntimeException;

/**
 * Class RuntimeException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class RuntimeException extends StandardRuntimeException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
