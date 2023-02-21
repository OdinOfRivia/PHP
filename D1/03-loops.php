<?php

/*
# LOOPS
- For
- While
- Do..While
- Foreach
 */

# For loops
# @params - init, condition, incroment/decroment

for ($i = 0; $i <= 10; $i++) {
    echo ($i . '<br>');
}

echo '<hr>';

#While loop
#@params - condition
$do = "While \n";
echo nl2br($do);

$x = 0;
while ($x < 10) {

    echo $x;
    $x++;
}

echo '<hr>';

#Do..While
#@params - condition // do will always run once
$do = "Do While \n";
echo nl2br($do);

$y = 0;
do {
    echo $y;
    $y++;
} while ($y < 10);
echo '<hr>';

#ForEach loop

$people1 = array('Kevin', 'Jeremy', 'Clarkson');
foreach ($people1 as $person) {
    echo $person . '<br>';
}
echo '<hr>';

$peopleAssoc = array('Brad' => 35, 'Joseph' => 22, 'William' => 38);
#here prson is the name and age in the key value
foreach ($peopleAssoc as $person => $age) {
    echo $person . ' is ' . $age . ' years old <br>';
}
