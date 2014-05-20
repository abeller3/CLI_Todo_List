<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list)
{
         $result = '';

    foreach($list as $key => $value)
    {
        
        $add = $key + 1;
        $result .= '[' . $add . '] ' . $value . PHP_EOL;
    }
        return $result;
}
   
// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = false) 
{
    $result = trim(fgets(STDIN));
    return $upper ? strtoupper($result) : $result;
}

function sort_menu($list) 
{
    echo '(A)-Z,(Z)-A,(O)rder entered,(R)everse order entered : ';
        
    $input = get_input(true);
    if($input == 'A') {
        asort($list);
    } elseif ($input == 'Z') {
        arsort($list);
    } elseif ($input == 'O') {
        ksort($list);
    } elseif ($input == 'R') {
        krsort($list);
     }   
     //sort the $list
    return $list;
}

// function unshift($array1)
// {
//     echo '(B)eginning or (E)nd : ';
//     if($input == 'B') {
//         array_unshift($array1,$item);
//     } else {
//         $items [] = $item;
//     }
// }

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);
    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit, (S)ort : ';
    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);
    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $item = get_input(); 
        //Show menu options for adding values
        echo 'Add to (B)eginning or (E)nd of the list? ';
        $add = get_input(TRUE);
        if ($add == 'B')
        {
        // Add entry to list array
        array_unshift($items, $item);
        } else {
            $items[] = $item;
        }
    }
         elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
    } elseif ($input == 'S') {
        $items = sort_menu($items);
    } elseif ($input == 'F'){
        array_shift($items);
    } elseif ($input == 'L') {
        array_pop($items);
    }


// Exit when input is (Q)uit
} while ($input != 'Q');
// Say Goodbye!
echo "Goodbye!\n";




// Exit with 0 errors
exit(0);