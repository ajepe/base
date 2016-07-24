<?php
namespace Base\Test;

use Base\Decode;
use Base\Encode;

class EncodeTest extends \PHPUnit_Framework_TestCase
{
	public function testEncode()
	{
		$expectedResult = "Hwtjc";
		$base = new Encode();
		$result = $base->encode(42000000);
		$this->assertEquals($expectedResult, $result);
	}


	public function testEncodeForIntegerOverFlowInWindows()
	{
		$expected_result = "Jzt9vW";
		$base = new Encode();
		$result = $base->encode(9223775807);
		$this->assertEquals($expected_result, $result);
	}

	/**
	 *@expectedException InvalidArgumentException
	 */

	public function testThrowsInvalidArgumentExceptionIfStringIsPassed()
	{
		$base = new Encode(); 
		$result = $base->encode('stringIsPassed');
	}

	public function testTraitHasAtrributeAlphanumericList()
	{
		$encode = new Encode();
		$this->assertObjectHasAttribute('alphaNumericList', new Encode());
	}

}


