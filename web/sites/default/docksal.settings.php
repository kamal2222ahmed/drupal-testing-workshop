<?php

$databases['default']['default'] = [
  'driver' => 'mysql',
  'host' => 'db',
  'database' => getenv('MYSQL_DATABASE'),
  'username' => getenv('MYSQL_USER'),
  'password' => getenv('MYSQL_PASSWORD'),
];
