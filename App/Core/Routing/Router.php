<?php
namespace App\Core\Routing;
use \App\Core\Request;

class Router
{
    private $request;
    private $routes;
    private $current_route;

    public function __construct()
    {
        $this->request= new Request();
        $this->routes= Route::routes();
        $this->current_route= $this->findRoute($this->request) ?? null;
        var_dump($this->current_route);
    }

    public function findRoute(Request $request)
    {
        echo $request->method(). " " .$request->uri();
        foreach($this->routes as $route){
            if(in_array($request->method(),$route['methods']) and $request->uri() == $route['uri']){
                return $route;
            }
        }
        return null;   
    }

    public function run()
    {
        #405 : invalid request method
        
        #404 : uri not exists

        #action NULL

        #action : clousure

        #action : Controller@method

        #action : ['Controller','method']
    }
}
