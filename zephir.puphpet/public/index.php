<?php

$data = ["test"=>["array"=>["index"=>123]]];

$start = microtime(true);
$digger = new \Jamjan\Arraydigger();
$digger->extract_data($data,"test.array.index");
$time_elapsed_secs = microtime(true) - $start;

echo "Z: " . number_format($time_elapsed_secs,12);

echo '<br />';

$start = microtime(true);
require 'ArrayDigger.php';
$ad = new ArrayDigger();
$ad->extract_data($data,"test.array.index");
$time_elapsed_secs = microtime(true) - $start;
echo "P: " . number_format($time_elapsed_secs,12);


function extract_data($resource_data,$path, $delimiter = ".") {
    $path_exploded = explode($delimiter,$path);
    if ( ! empty($path_exploded)) {
        $copy = $resource_data;
        foreach($copy as $key=>$value) {
            if(isset($copy[$key])) {
                $copy = $copy[$key];
            } else {
                return null;
            }
        }
        return $copy;
    } else {
        return null;
    }
}

