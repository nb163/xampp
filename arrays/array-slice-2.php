<?php
echo "<pre>";
// define array
$rainbow = array('violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red');

// extract 3 central values
// starting from the end
// output: ('blue', 'green', 'yellow')
$arr = array_slice($rainbow, -5, 13);
print_r($arr);