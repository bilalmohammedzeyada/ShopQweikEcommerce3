<?php

date_default_timezone_set('Africa/Cairo');

require __DIR__ . '/vendor/System/Application.php';
require __DIR__ . '/vendor/System/File.php';

use System\File;
use System\Application;
header('X-Frame-Options: SAMEORIGIN');
header("X-XSS-Protection: 0");
header('X-Content-Type-Options: nosniff');
header('Set-Cookie: secure; httponly');
$file = new File(__DIR__);

$app = Application::getInstance($file);

$app->run();                        