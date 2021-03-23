<?php

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    mail('schal2tl@cmich.edu', $name + ' - ' + $email, $message);

?>