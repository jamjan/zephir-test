<?php
echo "<a href='/index.php'><< Go Back</a><br />";
// include php_pad function
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

// test Zephir simplified
$start_zephir_simplified = microtime(true);
$padder->testSimplified();
$time_zephir_simplified = microtime(true) - $start_zephir_simplified;


// PRINT THE RESULTS

echo "<h3>Literal</h3>";

// print results for PHP
echo sprintf("P:  %s",number_format($time_php,12));
echo "<br />";

// print results for Zephir
echo sprintf("Z:  %s",number_format($time_zephir,12));
echo "<br />";

echo "<br />";
$percent = number_format((100-$time_php/$time_zephir*100),2);
if($percent>0) {
    echo "PHP was faster by " . $percent . "%";
} elseif($percent<0) {
    $percent = number_format((100-$time_zephir/$time_php*100),2);
    echo "Zephir was faster by " . $percent . "%";
} else {
    echo "Equal";
}

// print result for Zephir simplified
echo "<br />";
echo "<h3>Simplified</h3>";
// print results for PHP
echo sprintf("P:  %s",number_format($time_php,12));
echo "<br />";
// print results for Zephir simplified
echo sprintf("Z(s): %s",number_format($time_zephir_simplified,12));
echo "<br />";

echo "<br />";
$percent = number_format((100-$time_php/$time_zephir_simplified*100),2);
if($percent>0) {
    echo "PHP was faster by " . $percent . "%";
} elseif($percent<0) {
    $percent = number_format((100-$time_zephir_simplified/$time_php*100),2);
    echo "Zephir(simplified) was faster by " . $percent . "%";
} else {
    echo "Equal";
}