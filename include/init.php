<?php
# Define APP ROOT
define("APP_PATH", dirname(__FILE__));

// Define URL of the the app as BASE PATH which can be used for public folders.
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
define("BASE_PATH", $protocol . $_SERVER['SERVER_NAME'] . $_SERVER["CONTEXT_PREFIX"] .'/csclub');
?>