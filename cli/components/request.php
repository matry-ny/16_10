<?php

function parseRequest()
{
    global $argv;

    if (!array_key_exists(1, $argv)) {
        die('Command can not be empty');
    }

    // Todo: refactor request interface
    // php ./cli.php migrate/up index=1 marker=test
    // ['action' => 'migrate/up', 'params' => ['index' => 1, 'marker' => 'test']]

    return [
        'action' => $argv[1],
        'params' => array_slice($argv, 2)
    ];
}
