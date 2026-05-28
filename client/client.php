<?php
while (true) {
    $response = file_get_contents("http://php/");
    if ($response !== false) {
        echo date("[Y-m-d H:i:s]") . " Status: OK\n";
    } else {
        echo date("[Y-m-d H:i:s]") . " Status: FAIL\n";
    }
    sleep(3);
}
?>
