<?php

namespace FirstPlentyPlugin\Controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
  public function sayHello(Twig $twig):string
  {
    //FirstPlentyPlugin (also vor dem :: muss immer der PluginName=Ordnername sein)
    return $twig->render('FirstPlentyPlugin::content.hello'); //content.hello is the path to the twig File
    /*
    In this code example, we define the sayHello function that renders a twig template. The render method specifies the template location: 'PLUGINNAME::TEMPLATE'.
    Since templates are always saved in the resources/views folder in your plugin, we only have to specify part of the template path. Note that PLUGINNAME is the name of the plugin folder.
    The name of the plugin folder and the plugin namespace may differ.
    */
  }
}
 ?>
