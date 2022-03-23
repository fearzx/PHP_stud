<?php
// BEGIN (write your solution here)
$age1 = 23;
$age2 = 12;
function getAgeDifference($age1, $age2)
{
    $difference = abs($age1 - $age2);
    return "The age difference is $difference";
}
print_r (getAgeDifference($age1, $age2));
// END