<?php
class Swap 
{
    /**
     * Reverse a string
     *
     * @param string $str
     *
     * @return string
     */
    public static function reverse(string $str): string 
    {       
        $strArr = explode(' ', $str);
        foreach ($strArr as $key => $str) {
           $strArr[$key] = strrev($str);
        }
        return implode(' ', $strArr);
    }
}
// Test
echo 'f("junyiacademy") == ' . Swap::reverse('junyiacademy');
echo '<br />';
echo 'f("flipped class room is important") == ' . Swap::reverse('flipped class room is important');