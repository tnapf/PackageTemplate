<?php

namespace Tnapf\Packagetemplate\Test;

use PHPUnit\Framework\TestCase;
use Tnapf\Packagetemplate\ExampleClass;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue((new ExampleClass())->returnTrue());
    }
}
