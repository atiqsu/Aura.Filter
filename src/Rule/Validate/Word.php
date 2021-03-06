<?php
/**
 *
 * This file is part of the Aura project for PHP.
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Filter\Rule\Validate;

/**
 *
 * Sanitizes a value to a string with only word characters.
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
class Word
{
    /**
     *
     * Validates that the value is composed only of word characters.
     *
     * These include a-z, A-Z, 0-9, and underscore, indicated by a
     * regular expression "\w".
     *
     * @return bool True if valid, false if not.
     *
     */
    public function __invoke($subject, $field)
    {
        $value = $subject->$field;
        if (! is_scalar($value)) {
            return false;
        }
        $expr = '/^\w+$/D';

        return (bool) preg_match($expr, $value);
    }
}
