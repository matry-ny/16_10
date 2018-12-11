<?php

function runApp(array $config, array $request)
{
    $parts = explode('/', $request['action']);
    $controller = sprintf('%s/%s', $config['baseDir'], getControllerName($parts));

    (false === file_exists($controller)) && die('Controller is invalid');
    require_once $controller;

    $action = getActionName($parts);
    (false === function_exists($action)) && die('Action is invalid');

    call_user_func_array($action, $request['params']);
}

/**
 * @param array $parts
 *
 * @return string
 */
function getControllerName(array $parts): string
{
    $controller = getArrayValue($parts, 0, 'index');
    return sprintf('controllers/%sController.php', ucfirst($controller));
}

/**
 * @param array $parts
 *
 * @return string
 */
function getActionName(array $parts) : string
{
    $action = getArrayValue($parts, 1, 'index');
    return sprintf('action%s', ucfirst($action));
}
