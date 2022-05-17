<?php

namespace Rais\Hello;

use RuntimeException;

class SayHello implements SayHelloInterface
{
    public function greet(string $name)
    {
        return sprintf("Hello %s, Welcome to PHP.\n", $name);
    }

    public function greet_trows_exception(string $name)
    {
        if (!in_array(strtolower($name), ['rais', 'sidoine'])) {
            throw new RuntimeException();
        }
        return $this->greet($name);
    }

}