<?php
/**
 * Fight The Ice Core Range Exception.
 *
 * This exception is thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than under/overflow.
 * This is the runtime version of DomainException.
 *
 * @see       http://php.net/manual/class.rangeexception.php
 *
 * @package   FightTheIce\Exceptions
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2020 Alain Schlesser, Bright Nucleus
 */

namespace FightTheIce\Exceptions;

use RangeException as StandardRangeException;

/**
 * Class RangeException.
 *
 * @since   0.1.0
 *
 * @package FightTheIce\Exceptions
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class RangeException extends StandardRangeException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
