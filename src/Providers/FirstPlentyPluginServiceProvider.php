<?php

namespace MyFirstPlentyPlugin\Providers;

use Plenty\Plugin\ServiceProvider;

class FirstPlentyPluginServiceProvider extends ServiceProvider
{
  /*
  Register the ServiceProvider
  */
  public function register()
  {
    $this->getApplication()->register(FirstPlentyPluginRouteServiceProvider::class);
  }
}

 ?>
