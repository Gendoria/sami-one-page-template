<?php

namespace Test;

use Test\Interfaces\TestInterface;

/**
 * Abstract class.
 *
 * @author Tomasz Struczyński <t.struczynski@gmail.com>
 */
abstract class AbstractClass
{
    /**
     * This is a const.
     * 
     * @var string
     */
    const CLASS_CONST_STR = 'CONST';

    /**
     * This is another const.
     *
     * @var int
     */
    const CLASS_CONST_INT = 1;

    /**
     * This is a private property.
     * 
     * @var string
     */
    private $privProperty = 'This is a property';

    /**
     * This is an abstract function.
     *
     * @return int
     */
    abstract protected function abstractDo(): int;

    /**
     * This is a doSomething() method.
     *
     * This method does something.
     * 
     * @param string $param1
     * @param int $param2
     * @param TestInterface $param3
     */
    public function doSomething(string $param1, int $param2, TestInterface $param3)
    {
        
    }
}