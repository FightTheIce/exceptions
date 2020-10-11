<?php
/**
 * Fight The Ice Core Bad Method Call Exception.
 *
 * This exception is thrown if a callback refers to an undefined method or if
 * some arguments are missing.
 *
 * @see       http://php.net/manual/class.badmethodcallexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use BadMethodCallException as StandardBadMethodCallException;

/**
 * Class BadMethodCallException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class BadMethodCallException extends StandardBadMethodCallException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
