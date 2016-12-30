<?php
/**
 * Created by PhpStorm.
 * User: songping
 * Date: 2016/12/30
 * Time: 下午4:11
 */


require 'vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');