<?php

namespace Rais\Hello\Contracts;

interface SayHelloInterface
{
    /**
     * Greet the provided user name
     * 
     * @param string $name 
     * @return string 
     */
    public function greet(string $name);
}