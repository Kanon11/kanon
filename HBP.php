<?php


class solution
{    //  k  f  s    t  x   y
    // [ 2, 32, 9, 27, 10, 0 ]     [0, 2, 9, 10,27,32]
    // [ 34, 36, 56, 39, 29, 27 ]  [27,29,34,36,39,56]
    // K =6
    function FunctionName($a, $b, $c)
    {
        sort($a);
        sort($b);
        $count = 1;
        for ($i = 1; $i < count($a); $i++) {
            $s = $a[$i];
            $w = $b[$i - 1];
            if ($s < $w) {
                $count++;
            }
        }
        if ($count <= $c) {
            return 1;
        } else {
            return 0;
        }
    }
}

$obj = new solution();
//ans=1
$a = [13, 14, 36, 19, 44, 1, 45, 4, 48, 23, 32, 16, 37, 44, 47, 28, 8, 47, 4, 31, 25, 48, 49, 12, 7, 8];
// $a = [2, 32, 9, 27, 10, 0];
$b = [28, 27, 61, 34, 73, 18, 50, 5, 86, 28, 34, 32, 75, 45, 68, 65, 35, 91, 13, 76, 60, 90, 67, 22, 51, 53];
// $b = [34, 36, 56, 39, 29, 27];
// $c = 6;
$c = 23;
echo "<pre>";
print_r($obj->FunctionName($a, $b, $c));
echo "</pre>";
