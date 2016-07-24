<?php
namespace Base\Test;

use Base\Encode;
use Base\Decode;

class DecodeTest extends \PHPUnit_Framework_TestCase
{
	public function testDecode()
	{
		$base = new Decode();
		$expectedResult = 42000000;
		$result = $base->decode('Hwtjc');
		$this->assertEquals($expectedResult, $result);

	}

	public function testDecodeRationalString()
	{
		$base = new Decode();
		$expectedResult = 1882065;
		$result = $base->decode('ajepe');
		$this->assertEquals($expectedResult, $result);

	}

	public function testDecodeStringSeparatedWithWhiteSpaceAndPeriod()
	{
		$base = new Decode();
		$expectedResult = 8696202;
		$result = $base->decode(' b K7y.');
		$this->assertEquals($expectedResult, $result);
	}

	public function testTraitHasAtrributeAlphanumericList()
	{
		$decode = new Decode();
		$this->assertObjectHasAttribute('alphaNumericList', new Decode());
	}
}


