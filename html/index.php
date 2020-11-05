<?php
if (!isset($_GET['debug']))
{
    show_source(__FILE__);
    die();
}

echo "flag in flag.php, just read";

$file = "haha.php";

if (isset($_GET['file']))
{
    $file = $_GET['file'];
}

include($file);
