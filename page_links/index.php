<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

$db = new Database('localhost', 3306, 'project_php', 'root', '');

$posts = $db->query(query: 'SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

dd(value: $posts);