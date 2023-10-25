<?php
$command = escapeshellcmd('python app.py');
$output = shell_exec($command);
echo $output;
?>