

<?php

// Create array to hold list of todo items
$items = array();
array_unshift($items, "");
unset($items[0]);

// The loop!
do {
    //Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // for($i = 1; $i <count($items); $i++) {
    // 	$key = $items[$i];
    // 	echo . PHP_EOL;

    // }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines

    $input = trim(fgets(STDIN));
    // $input = ucfirst($input);


    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uitn
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);