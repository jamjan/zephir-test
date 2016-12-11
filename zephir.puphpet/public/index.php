<?php

$data = ["test"=>["array"=>["index"=>123]]];

$iterations = 10;

$start = microtime(true);
for ($a=0;$a<$iterations;$a++) {
    $digger = new \Jamjan\Arraydigger();
    $digger->extract_data($data, "test.array.index");
    $time_elapsed_secs = microtime(true) - $start;
}
echo "Z: " . number_format($time_elapsed_secs,12);

echo '<br />';

$start = microtime(true);
require 'ArrayDigger.php';
for ($a=0;$a<$iterations;$a++) {
    $ad = new ArrayDigger();
    $ad->extract_data($data,"test.array.index");
    $time_elapsed_secs = microtime(true) - $start;
}
echo "P: " . number_format($time_elapsed_secs,12);
