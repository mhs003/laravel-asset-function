<?php
include 'functions.php';

// These defines are required for the asset() function to work

define('ROOT', __DIR__);                // Define this in your index.php file in the root of your project
define('PUBLIC_DIR', '/public');        // Define thie Public directory of your project
define('APP_URI', 'http://php.test/');  // Define your application url

// ^^^^^^^^^^^^^^^^

echo asset('files/file.txt');
echo "<br>";
echo asset('test.txt');
echo "<br>";
echo asset('files/abcd.js');