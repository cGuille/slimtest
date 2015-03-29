<?php
$config['db'] = [
  'host' => 'localhost',
  'name' => 'slimtest',
  'user' => 'slimtest',
  'pass' => 'slimtest',
  'options' => [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
  ],
];
