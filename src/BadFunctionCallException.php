<?php
/**
 * Fight The Ice Core BadFunctionCall Exception.
 *
 * This exception is thrown if a callback refers to an undefined function or if
 * some arguments are missing.
 *
 * @see       http://php.net/manual/class.badfunctioncallexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use BadFunctionCallException as StandardBadFunctionCallException;

/**
 * Class BadFunctionCallException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class BadFunctionCallException extends StandardBadFunctionCallException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
