<?php
if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    try {
        // Evaluate the expression
        $result = eval('return ' . $expression . ';');
        echo $result;
    } catch (Exception $e) {
        echo 'Error';
    }
}
