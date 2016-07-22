<?php
// @codingStandardsIgnoreFile

namespace Jnjxp\Rinc;

class IncrementTest extends \PHPUnit_Framework_TestCase
{

    public function testDefinedIncrements()
    {
        $data = [
            ['eighth'  , 0.87 , 0.875 , 0.875 , 0.75] ,
            ['quarter' , 0.28 , 0.25  , 0.5   , 0.25] ,
            ['half'    , 0.56 , 0.5   , 1     , 0.5]  ,
        ];

        foreach ($data as $spec) {
            $inc = Increment::$spec[0]();
            $this->assertEquals($inc($spec[1]), $spec[2]);
            $this->assertEquals($inc->next($spec[1]), $spec[3]);
            $this->assertEquals($inc->previous($spec[1]), $spec[4]);
        }
    }

}
