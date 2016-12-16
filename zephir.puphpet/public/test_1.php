<?php
echo "<a href='/index.php'><< Go Back</a>";
$data = ["test"=>["array"=>["index"=>123]],"another","another_another"];
$index_to_extract = "test.array.index";
$iterations_external = 1000;
$iterations_internal = 100;
$time_aggregated_together_zephir = 0;
$time_aggregated_together_php = 0;
$time_aggregated_separately_zephir = 0;
$time_aggregated_separately_php = 0;
require 'ArrayDigger.php';
/**
 * iterate TOGETHER:
 */
for($x=0;$x<=$iterations_external;$x++) {
// Zephir:
    $start_zephir = microtime(true);
    iterate_zephir($data,$index_to_extract,$iterations_internal);
    $time_aggregated_together_zephir += microtime(true) - $start_zephir;
// PHP:
    $start_php = microtime(true);
    iterate_php($data,$index_to_extract,$iterations_internal);
    $time_aggregated_together_php += microtime(true) - $start_php;
}
/**
 * iterate SEPARATELY:
 */
// Zephir:
$start = microtime(true);
for($x=0;$x<=$iterations_external;$x++) {
    iterate_zephir($data,$index_to_extract,$iterations_internal);
}
$time_aggregated_separately_zephir += microtime(true) - $start;
// PHP:
$start = microtime(true);
for($x=0;$x<=$iterations_external;$x++) {
    iterate_php($data,$index_to_extract,$iterations_internal);
}
$time_aggregated_separately_php += microtime(true) - $start;
echo "Together: <br />";
echo sprintf("Z: %s",number_format($time_aggregated_together_zephir,12));
echo '<br />';
echo sprintf("P: %s",number_format($time_aggregated_together_php,12));
echo '<br />';
$percent = number_format((100-$time_aggregated_together_php/$time_aggregated_together_zephir*100),2);
if($percent>0) {
    echo "PHP was faster by " . $percent . "%";
} else {
    $percent = number_format((100-$time_aggregated_together_zephir/$time_aggregated_together_php*100),2);
    echo "Zephir was faster by " . $percent . "%";
}
echo "<br />";
echo "<hr />";
echo "Separate: <br />";
echo sprintf("Z: %s",number_format($time_aggregated_separately_zephir,12));
echo '<br />';
echo sprintf("P: %s",number_format($time_aggregated_separately_php,12));
echo "<br />";
$percent = number_format((100-$time_aggregated_separately_php/$time_aggregated_separately_zephir*100),2);
if($percent>0) {
    echo "PHP was faster by " . $percent . "%";
} else {
    $percent = number_format((100-$time_aggregated_separately_zephir/$time_aggregated_separately_php*100),2);
    echo "Zephir was faster by " . $percent . "%";
}
function iterate_zephir($data,$index_to_extract,$iterations_internal) {
    for ($a=0;$a<=$iterations_internal;$a++) {
        $digger = new \Jamjan\Arraydigger();
        $digger->extract_data($data,$index_to_extract);
    }
}
function iterate_php($data,$index_to_extract,$iterations_internal) {
    for ($a=0;$a<=$iterations_internal;$a++) {
        $digger = new ArrayDigger();
        $digger->extract_data($data,$index_to_extract);
    }
}