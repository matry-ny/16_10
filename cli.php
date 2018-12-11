<?php

$config = array_merge(
    require_once __DIR__ . '/configs/main.php',
    require_once __DIR__ . '/configs/cli.php'
);

require_once __DIR__ . '/helpers/arrays.php';
require_once __DIR__ . '/components/db.php';
require_once __DIR__ . '/cli/components/request.php';
require_once __DIR__ . '/components/app.php';

$request = parseRequest();
runApp($config, $request);
