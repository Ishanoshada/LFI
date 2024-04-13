<?php

$con = mysqli_connect('localhost', 'shafriri_ilan', 'Y%2LNplheXy)', 'shafriri_db');

/* check connection */
if (!$con) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>