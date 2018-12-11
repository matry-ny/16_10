<?php

$config = array_merge(
    require_once __DIR__ . '/configs/main.php',
    require_once __DIR__ . '/configs/web.php'
);
require_once __DIR__ . '/components/db.php';

var_dump(getDbConnection());

