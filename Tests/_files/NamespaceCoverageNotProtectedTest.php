<?php
class NamespaceCoverageNotProtectedTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Foo\CoveredClass::<!protected>
     */
    public function testPublicMethod()
    {
        $o = new Foo\CoveredClass;
        $o->publicMethod();
    }
}
