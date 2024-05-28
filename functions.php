<?php

function asset($file)
{
    $requiredConstants = ['ROOT', 'PUBLIC_DIR', 'APP_URI'];
    foreach ($requiredConstants as $constant) {
        if (!defined($constant)) {
            throw new Exception("$constant is not defined");
        }
    }

    $file_actual_path = ROOT . DIRECTORY_SEPARATOR . PUBLIC_DIR . DIRECTORY_SEPARATOR . ltrim($file, '/');

    if (!file_exists($file_actual_path)) {
        throw new Exception('File does not exist');
    }

    $public_path = rtrim(PUBLIC_DIR, '/');
    $file_path = $public_path . DIRECTORY_SEPARATOR . ltrim($file, '/');

    return str_replace('\\', '/', rtrim(APP_URI, '/') . '/' . ltrim($file_path, '/'));
}


// TODO: Add more functions