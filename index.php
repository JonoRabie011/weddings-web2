<?php
require_once "./vendor/autoload.php";
$config = new \Tina4\Config();

\Tina4\Initialize();
$auth = new WeddingsAuth();
$config->setAuth($auth);
echo new \Tina4\Tina4Php($config);