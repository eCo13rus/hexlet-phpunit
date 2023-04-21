<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\capitalize;

class MyTest extends TestCase
{
    public function testCapitalize(): void
    {
        $this->assertEquals('Hello world', capitalize('hello world'));
        $this->assertEquals('Hello World', capitalize('Hello World'));
        $this->assertEquals('1st letter capitalized', capitalize('1st letter capitalized'));
        $this->assertEquals('', capitalize(''));
        $this->assertEquals('Hello', capitalize('hello'));
        $this->assertEquals('123', capitalize('123'));
    }
}
