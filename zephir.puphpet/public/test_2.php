<?php

echo "<a href='/index.php'><< Go Back</a><br />";

require_once "test_2.inc.php";

// test PHP
$start_php = microtime(true);
php_pad();
$time_php = microtime(true) - $start_php;

// test Zephir:
$padder = new \Jamjan\PaddingTest();
$start_zephir = microtime(true);
$padder->test();
$time_zephir = microtime(true) - $start_zephir;

echo "<br />";
echo sprintf("P: %s",number_format($time_php,12));
echo "<br />";
echo sprintf("Z: %s",number_format($time_zephir,12));

echo "<br /><br />";

$percent = number_format((100-$time_php/$time_zephir*100),2);
if($percent>0) {
    echo "PHP was faster by " . $percent . "%";
} else {
    $percent = number_format((100-$time_zephir/$time_php*100),2);
    echo "Zephir was faster by " . $percent . "%";
}