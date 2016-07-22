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
 * @category  Increment
 * @package   Jnjxp\Rinc
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/jnjxp/jnjxp.rinc
 */

namespace Jnjxp\Rinc;

/**
 * Increment
 *
 * @category Increment
 * @package  Jnjxp\Rinc
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/jnjxp/jnjxp.rinc
 */
class Increment
{

    /**
     * Increment
     *
     * @var float
     *
     * @access protected
     */
    protected $increment;

    /**
     * Rounder
     *
     * @var RoundTo
     *
     * @access protected
     */
    protected $rounder;

    /**
     * __construct
     *
     * @param float $increment round to value
     *
     * @access public
     */
    public function __construct($increment)
    {
        $this->increment = $increment;
        $this->rounder = new RoundTo;
    }

    /**
     * Named constructor for rounding to eighth
     *
     * @return Increment
     *
     * @access public
     * @static
     */
    public static function eighth()
    {
        return new self(1/8);
    }

    /**
     * Named constructor for rounding to quarter
     *
     * @return Increment
     *
     * @access public
     * @static
     */
    public static function quarter()
    {
        return new self(1/4);
    }

    /**
     * Named constructor for rounding to half
     *
     * @return Increment
     *
     * @access public
     * @static
     */
    public static function half()
    {
        return new self(1/2);
    }

    /**
     * Round value to nearest increment
     *
     * @param float $value value to round
     *
     * @return float
     *
     * @access public
     */
    public function nearest($value)
    {
        return $this->rounder->nearest($this->increment, $value);
    }

    /**
     * Round value to next increment
     *
     * @param float $value value to round
     *
     * @return float
     *
     * @access public
     */
    public function next($value)
    {
        return $this->rounder->next($this->increment, $value);
    }

    /**
     * Round value to previous increment
     *
     * @param float $value value to round
     *
     * @return float
     *
     * @access public
     */
    public function previous($value)
    {
        return $this->rounder->previous($this->increment, $value);
    }

    /**
     * Proxy to self::nearest
     *
     * @param float $value value to round
     *
     * @return float
     *
     * @access public
     */
    public function __invoke($value)
    {
        return $this->nearest($value);
    }
}

