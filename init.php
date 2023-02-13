<?php
ob_start();
session_start();
include "config.php";
$tem = 'include/';
$css = 'themes/css/';
$js = 'themes/js/';

include $tem . 'header.php';

include $tem . 'navbar.php';