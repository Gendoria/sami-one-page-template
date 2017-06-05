<?php

namespace Test;

/**
 * This is a interface.
 * 
 * @author Tomasz Struczyński <t.struczynski@gmail.com>
 */
interface TestInterface
{
    /**
     * This is an interface method.
     *
     * @param array $param1 Test parameter.
     * 
     * @return string Some return value.
     */
    public function interfaceMethod(array $param1): string;
}