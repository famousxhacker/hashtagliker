

👨‍💄1�7 👨‍💻👨�1�7�💻👨�1�7�💻👨�1�7�💄1�7

Modified by - Rohan Banekar
Follow Me On Instagram @famous_x_hacker


👨‍💻👨�1�7�💻👨�1�7�💻👨�1�7�💻👨�1�7�💄1�7

<?php
error_reporting(0);

DEFINE('ROOTDIR', __DIR__);
require ROOTDIR . '/src/autoloader.php';
$loader = new autoloader();
$loader->addNamespace('xosad', ROOTDIR . '/src/xosad');
$loader->register();
use xosad\igFame;
$i = new igFame();
$i->startCore();
