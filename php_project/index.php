<?php

require 'functions.php';
require 'Database.php';
require 'config.php';
// require 'router.php';

$config = require('config.php');

$db = new Database(config: $config, username: $config['database']['username'], password: $config['database']['password']);

$posts = $db->query(query: 'SELECT * FROM posts')->fetchAll();

dd(value: $posts);