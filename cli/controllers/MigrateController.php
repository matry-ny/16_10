<?php

require_once __DIR__ . '/../models/Migration.php';

function actionUp($one, $two, $three)
{
    var_dump($one, $two, $three);
}

/**
 * @param string $name
 */
function actionCreate(string $name)
{
    createMigration($name);
}
