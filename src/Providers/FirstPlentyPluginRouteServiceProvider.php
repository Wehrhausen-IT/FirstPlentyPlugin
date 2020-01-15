<?php

namespace FirstPlentyPlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class FirstPlentyPluginRouteServiceProvider extends RouteServiceProvider
{
  public function map(Router $router)
  {
    /*
      We use the get method to pass two parameters. The first parameter 'hello' defines the route. The second parameter consists of the Fully-Qualified Class Name and the @ controller method that is called when the route is called.
    */
    $router->get('hello','FirstPlentyPlugin\Controller\ContentController@sayHello');
  }
}
 ?>
