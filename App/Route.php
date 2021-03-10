<?php

    namespace App;

    use MF\Init\Bootstrap;

    class Route extends Bootstrap{
        
        protected function initRoutes(){

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            $routes['admin'] = array(
                'route' => '/admin',
                'controller' => 'adminController',
                'action' => 'admin'
            );

            $routes['login'] = array(
                'route' => '/login',
                'controller' => 'adminController',
                'action' => 'login'
            );

            $this->setRoutes($routes);

        }

    }

?>