<?php


declare(strict_types=1);

$debug = false;
$rustart = getrusage();
$time_start = microtime(true);

session_name('gagyi');
session_start();

//$_SESSION['test'] = 'moo';
$baseDir = __DIR__ . '/..';
require "{$baseDir}/vendor/autoload.php";

use Gagyi\Architecture\Architecture;

// Instantiate a new Gomba
$app = new Architecture();
$app->run();


if ($debug) {
	function rutime($ru, $rus, $index) {
	    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
	    - ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
	}

	$ru = getrusage();
	$time_end = microtime(true);
	$execution_time = ($time_end - $time_start) * 1000;
	?>
	<div>
		system: <strong><?= rutime($ru, $rustart, "stime") ?></strong>ms
		&mdash; processing: <strong><?= rutime($ru, $rustart, "utime") ?></strong>ms
		&mdash; execution: <strong><?= round($execution_time, 2) ?></strong>ms
	</div>
<?php } ?>
