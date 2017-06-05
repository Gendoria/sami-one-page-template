<?php

namespace Test;

use Test\Interfaces\TestInterface;

/**
 * This is a solid class extending abstract class.
 *
 * @author Tomasz Struczyński <t.struczynski@gmail.com>
 */
class SolidClass extends AbstractClass implements TestInterface
{
    /**
     * {@inheritdoc}
     * 
     * @return int
     */
    protected function abstractDo(): int
    {
        return self::CLASS_CONST_INT;
    }

    /**
     * This is implemented interface method.
     *
     * @param array $param1
     *
     * @return string
     */
    public function interfaceMethod(array $param1): string
    {
        return self::CLASS_CONST_STR;
    }

    /**
     * Sub class parameter method.
     * 
     * @param Sub\SubClass $subClassParam
     */
    public function subClassMethod(Sub\SubClass $subClassParam)
    {
        
    }
}