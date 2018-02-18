<?php

$q = $_REQUEST["q"];

$task = new task();
$task->setTaskText($q);

?>