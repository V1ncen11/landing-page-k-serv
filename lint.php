<?php
foreach(glob('storage/framework/views/*.php') as $f) {
    exec('php -l ' . escapeshellarg($f), $out, $ret);
    if($ret !== 0) {
        echo "Error in $f\n";
        echo implode("\n", $out)."\n";
    }
}
echo "Done.";
