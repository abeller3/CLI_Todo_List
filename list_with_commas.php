<?php


// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $do_sort = FALSE) 
{
    $array = explode(', ',$string);
    if($do_sort)
    {
        sort($array);
    }

    $last_item = array_pop($array);

    array_push($array, "and $last_item");

    $string = implode(', ', $array);

    return $string;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>
