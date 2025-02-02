<?php

namespace Models;

require './vendor/autoload.php';

use Doctrine\DBAL\Schema\Schema;
use Nexa\Reflection\EntityReflection;

use Doctrine\DBAL\Driver\PDO\MySQL\Driver;
use Doctrine\DBAL\Platforms\MySQLPlatform;
use Nexa\Nexa;
use Models\User;

$nexa = new Nexa(
    [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'nexa'
    ],
    new Driver,
);

$result = $nexa->getSql(new EntityReflection(User::class), new Schema);

dump($result);