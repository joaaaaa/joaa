<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../joaa/Linear.php';
include_once __DIR__ . '/../joaa/Square.php';
include_once __DIR__ . '/../joaa/joaaException.php';
include_once __DIR__ . '/../joaa/Log.php';
class LinearTest extends TestCase {
	public function testLinear1() : void
	{
		$a = new joaa\Linear();
		$this->assertEquals([-2],$a->linear(5,10));
	}
	public function testLinear2() : void
	{
        $a = new joaa\Linear();
        $this->assertEquals([0],$a->linear(5,0));
	}
	public function testExpectException1() : void
	{
        $a = new joaa\Linear();
        $this->expectException(joaa\joaaException::class);
        $a->linear(0,5);
	}
	public function testExpectException2() : void
	{
        $a = new joaa\Linear();
        $this->expectException(joaa\joaaException::class);
        $a->linear(0,0);
	}
}
