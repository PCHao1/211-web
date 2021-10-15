<?php
define("APP_PATH", realpath('.'));
session_start();
require_once APP_PATH . '/app/config/loader.php';
$loader = new Loader();
$loader->load();

