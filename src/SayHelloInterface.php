<?php

namespace Rais\Hello;

interface SayHelloInterface
{
    /**
     * 
     * @param string $name 
     * @return void 
     */
    public function greet(string $name);
}