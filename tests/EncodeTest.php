<?php
namespace Base\Test;

use Base\Decode;
use Base\Encode;

class EncodeTest extends \PHPUnit\Framework\TestCase
{
	public function testEncode()
	{
		$expectedResult = "Hwtjc";
		$base = new Encode();
		$result = $base->encode(42000000);
		$this->assertEquals($expectedResult, $result);
	}


	public function testEncodeForIntegerOverFlowOnBase32ArchitectureOs()
	{
		$expected_result = 'HXy0p9'; //TODO: fix os information in
		$base = new Encode();
		$result = $base->encode(2147483647);
		$this->assertEquals($expected_result, $result);
	}

	#/**
	 #*@expectedException TypeError
	 #*/
	#public function testThrowsInvalidArgumentExceptionIfStringIsPassed()
	#{
	#	$base = new Encode(); 
	#	$result = $base->encode('stringIsPassed');
	#}

	public function testTraitHasAtrributeAlphanumericList()
	{
		$encode = new Encode();
		$this->assertObjectHasAttribute('alphaNumericList', new Encode());
	}

}


