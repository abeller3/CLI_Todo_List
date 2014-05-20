<?php

// // List of famous peeps
// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// //explode to make an array
// $new_physicists = explode(', ', $physicists_string);



// // print_r($explode);

// $pop_last = array_pop($new_physicists);


// // print_r($pop_last);

// $addand = array_push($new_physicists,"and");

// // print_r($new_physicists);

// $put_back = array_push($new_physicists,$pop_last);

// $famous_fake_physicists = implode(", ",$new_physicists);

//  echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";





// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
  $array = explode(', ',$string);
  sort($array);
  $last_item = array_pop($array);
  return implode(', ', $array) . ",and $last_item";
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;



?>
