<?php
/**
 * Fight The Ice Core Length Exception
 *
 * This exception is thrown if a length is invalid.
 *
 * @see       http://php.net/manual/class.lengthexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use LengthException as StandardLengthException;

/**
 * Class LengthException
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class LengthException extends StandardLengthException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
