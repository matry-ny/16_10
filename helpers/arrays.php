<?php

/**
 * @param array $array
 * @param string $key
 * @param null $default
 *
 * @return string
 */
function getArrayValue(array $array, string $key, $default = null)
{
    // Todo: refactor key
    // $array = ['test' => ['qwerty' => 123]]
    // $key = 'test.qwerty'
    // return 123
    return array_key_exists($key, $array) ? $array[$key] : $default;
}
