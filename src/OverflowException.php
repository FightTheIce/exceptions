<?php
/**
 * Fight The Ice Core Overflow Exception.
 *
 * This exception is thrown when adding an element to a full container.
 *
 * @see       http://php.net/manual/class.overflowexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use OverflowException as StandardOverflowException;

/**
 * Class OverflowException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class OverflowException extends StandardOverflowException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
