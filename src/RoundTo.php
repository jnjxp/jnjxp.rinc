<?php
/**
 * Jnjxp Rinc
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  RoundTo
 * @package   Jnjxp\Rinc
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/jnjxp/jnjxp.rinc
 */

namespace Jnjxp\Rinc;

/**
 * RoundTo
 *
 * @category RoundTo
 * @package  Jnjxp\Rinc
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/jnjxp/jnjxp.rinc
 */
class RoundTo
{
    /**
     * Round to nearest increment
     *
     * @param float $increment incremenet to round to
     * @param float $value     value to round
     *
     * @return float
     *
     * @access public
     */
    public function nearest($increment, $value)
    {
        $value = $value / $increment;
        $value = round($value, 0);
        return $value * $increment;
    }

    /**
     * Round to next increment
     *
     * @param float $increment incremenet to round to
     * @param float $value     value to round
     *
     * @return float
     *
     * @access public
     */
    public function next($increment, $value)
    {
        $value = $value / $increment;
        $value = ceil($value);
        return $value * $increment;
    }

    /**
     * Round to previous increment
     *
     * @param float $increment incremenet to round to
     * @param float $value     value to round
     *
     * @return float
     *
     * @access public
     */
    public function previous($increment, $value)
    {
        $value = $value / $increment;
        $value = floor($value);
        return $value * $increment;
    }
}
