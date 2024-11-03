<?php

/**
 * get base path
 *
 * return string
 */

function basePath($path)
{
    return __DIR__ .'/'.$path;
}

/**
 * load a view
 *
 * @param string $name
 * @return void
 */
function loadView($name)
{
    require basePath("views/{$name}.php");
}

/**
 * load a view partial
 *
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    require basePath("views/partials/{$name}.php");
}