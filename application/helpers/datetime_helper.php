<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

function datetimenow ()
{
    date_default_timezone_set('Europe/Istanbul');
    return date('d/m/Y H:i:s');
}

?>