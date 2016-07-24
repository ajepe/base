<?php declare(strict_types = 1);

namespace Base;
/*
 * This file is part of the base\base62 package.
 *
 * (c) Ajepe Babatope <ajepebabatope@gmail.com.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.//*343*5*6#
 */

class Encode
{
	/**
	 * Trait AlphaNumericList
	 * 
     * @return alphaNumericList.
     */
	use AlphaNumericList;

	/**
	 * @param integer $id 
	 * @param inter $base default = 62.
	 * @return encoded base 62 string.
	 */
	public function encode($id, $base = 62):string
	{
		if (!is_int($id) && $id < 1) {
			$type = gettype($id);
			throw new \InvalidArgumentException(sprintf("Expects intval %s given. ", $type));
		}
		$modulus = $id % $base;
		$indexPos = $this->alphaNumericList[$modulus];
		$divide = floor($id / $base);
		while ($divide) {
           $modulus = $divide % $base;
           $divide = floor($divide / $base);
           $indexPos = $this->alphaNumericList[$modulus].$indexPos;
       }
       return $indexPos;
	}
}
