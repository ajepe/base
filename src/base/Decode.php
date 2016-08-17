<?php declare(strict_types = 1);

namespace Base;
/*
 * This file is part of the base\base62 package.
 *
 * (c) Ajepe Babatope <ajepebabatope@gmail.com.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Decode
{
    /**
     * Trait AlphaNumericList
     * 
     * @return alphaNumericList.
     */
    use AlphaNumericList;

    /** 
     * [decode input string in base 62 to the original decimal value]
     *
     * @return intval.
     */
      
    public function decode(string $string):int
    {
        $string = preg_replace('/[\s|\.|\,]+/', '', $string);
        $len = strlen($string) - 1;
        $base = 0;
        for ($i = $len, $k = 0; $i >= 1, $k <= $len; $i--, $k++) {
            $position = strpos($this->alphaNumericList, $string[$i]);
            $base += pow(62, $k) * $position;
        }
        return intval($base);
    }
}
