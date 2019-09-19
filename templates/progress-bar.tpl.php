<?php

$percentage = $status["percentage"];
$active_nodes = $status["active_nodes"];

// progress nodes classes 
$progress_nodes = ["one", "two", "three", "four", "five"];

$content = '<div id="workflow-progress" class="progress">';

// create active nodes
for ($i = 1; $i <= $active_nodes; $i++) {
    $content .= '<div class="activity ' . $progress_nodes[$i - 1] . ' bg-success"></div>';
}

//create inactive nodes
$no_inactive = 5 - $active_nodes;

for ($i = 1; $i <= $no_inactive; $i++) {
    $content .= '<div class="activity ' . $progress_nodes[$active_nodes + $i - 1] . ' no-color"></div>';
}

$content .= '<div class="progress-bar progress-bar-success" style="width: ' . $percentage . '%"></div>
                </div>';

print($content);


