<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */

Router::defaultRouteClass(DashedRoute::class);



Router::prefix('admin', function ($routes) {
        $routes->connect('/', ['prefix' => 'admin','controller' => 'Admin', 'action' => 'index']);
        $routes->connect('/users', ['controller' => 'Users', 'action' => 'index']);
        $routes->connect('/users/login', ['controller' => 'Users', 'action' => 'login']);

        $routes->connect('/customers/', ['controller' => 'Customers', 'action' => 'index']);
        $routes->connect('/customers/add', ['controller' => 'Customers', 'action' => 'add']);
        $routes->connect('/customers/edit', ['controller' => 'Customers', 'action' => 'edit']);
        $routes->connect('/customers/delete', ['controller' => 'Customers', 'action' => 'delete']);
        $routes->fallbacks(DashedRoute::class);
               // products
        $routes->connect('/products/', ['controller' => 'Products', 'action' => 'index']);
        $routes->connect('/products/add', ['controller' => 'Products', 'action' => 'add']);
        $routes->connect('/products/edit', ['controller' => 'Products', 'action' => 'edit']);
        $routes->connect('/products/delete', ['controller' => 'Products', 'action' => 'delete']);

         $routes->connect('/categories/', ['controller' => 'ProductCategories', 'action' => 'index']);
        $routes->connect('/categories/add', ['controller' => 'ProductCategories', 'action' => 'add']);
        $routes->connect('/categories/edit', ['controller' => 'ProductCategories', 'action' => 'edit']);
        $routes->connect('/categories/delete', ['controller' => 'ProductCategories', 'action' => 'delete']);


         $routes->connect('/orders/', ['controller' => 'Orders', 'action' => 'index']);
        $routes->connect('/orders/add', ['controller' => 'Orders', 'action' => 'add']);
        $routes->connect('/orders/edit', ['controller' => 'Orders', 'action' => 'edit']);
        $routes->connect('/orders/delete', ['controller' => 'Orders', 'action' => 'delete']);

        $routes->connect('/images/', ['controller' => 'Images', 'action' => 'index']);
        $routes->connect('/images/add', ['controller' => 'Images', 'action' => 'add']);
        $routes->connect('/images/edit', ['controller' => 'Images', 'action' => 'edit']);
        $routes->connect('/images/delete', ['controller' => 'Images', 'action' => 'delete']);
        $routes->fallbacks(DashedRoute::class);


});

Router::scope('/', function ($routes) {
      $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/product/{id}', ['controller' => 'Home', 'action' => 'product']);
    $routes->connect('/products', ['controller' => 'Home', 'action' => 'products']);
    $routes->connect('/check-out', ['controller' => 'Home', 'action' => 'checkOut']);
    $routes->connect('/about', ['controller' => 'Home', 'action' => 'about']);
    $routes->connect('/contact', ['controller' => 'Home', 'action' => 'contact']);
    $routes->connect('/cart', ['controller' => 'Home', 'action' => 'cart']);
    $routes->connect('/googlelogin', ['controller' => 'Home', 'action' => 'loginGoogle']);
    $routes->connect('/register', ['controller' => 'Home', 'action' => 'register']);
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
