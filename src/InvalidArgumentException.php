<?php
/**
 * Fight The Ice Core Invalid Argument Exception.
 *
 * This exception is thrown if an argument is not of the expected type.
 *
 * @see       http://php.net/manual/class.invalidargumentexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use InvalidArgumentException as StandardInvalidArgumentException;

/**
 * Class InvalidArgumentException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class InvalidArgumentException extends StandardInvalidArgumentException implements ExceptionInterface {

	use ModuleExceptionTrait;
}
