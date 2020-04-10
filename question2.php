<?php
class Algorithm 
{
    /**
     * Filter a number
     *
     * @param int $number
     *
     * @return array
     */
    public static function filter(int $number): array 
    {
        $arr = [];
        for($i = 1; $i <= $number; $i++) {
            if (($i%3 != 0 && $i%5 != 0) || ($i%3 == 0 && $i%5 == 0) ) {
                $arr[] = $i; 
            }
        }
        return $arr;
    }
}
// Test
echo 'Input：15<br />';
$filter = Algorithm::filter(15);
print_r($filter);
echo '<br />';
echo 'Output：' . count($filter);