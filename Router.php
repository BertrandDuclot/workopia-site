<?php

class Router {
    protected $routes = [];

    /**
     * Add a GET route
     * testtest
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get($uri, $controller) {
        $this->routes = [
            'method' => 'GET',
            'uri' => $uri,
            'controller' => $controller
        ];

    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post($uri, $controller) {
        
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function put($uri, $controller) {
        
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function delete($uri, $controller) {
        
    }
}