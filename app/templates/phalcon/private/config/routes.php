<?php

/**
 * Create a Router instance and define application routes
 */

use Phalcon\Mvc\Router;

$router = new Router();

$router->removeExtraSlashes(true);
$router->setDefaultModule('<%= module.namespace %>');
$router->setDefaultNamespace('<%= project.namespace %>\<%= module.namespace %>\Controllers');

return $router;
