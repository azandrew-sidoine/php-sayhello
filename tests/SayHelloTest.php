<?php

use PHPUnit\Framework\TestCase;
use Rais\Hello\SayHello;

class SayHelloTest extends TestCase
{
    public function test_greet()
    {
        $object = new SayHello;
        $result = $object->greet('Rais');
        $this->assertEquals("Hello Rais, Welcome to PHP.\n", $result);
    }


    public function test_greet_throws_exception_when_benji_passed()
    {
        $this->expectException(RuntimeException::class);
        $object = new SayHello;
        $result = $object->greet_trows_exception('benji');
    }

}