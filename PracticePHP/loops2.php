<?php
$arr = ['item1', 'item2','item3'];

echo '<br><br><br><br><br><br>FOREACH:<br>';

foreach( $arr as $item) {
    echo $item;
}

echo '<br><br><br><br><br><br>FORLOOP:<br>';

for( $i = 0; $i > count($arr); $i++ ) {
    echo $arr[$i];

}

echo '<br><br><br><br><br><br>WHILE:<br>';

$counter = 0;
$max = count($arr);
while( $counter < $max ) {
    echo $arr[$counter];
    $counter++;
}