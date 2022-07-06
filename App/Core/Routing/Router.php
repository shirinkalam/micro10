<?php
namespace App\Core\Routing;
use \App\Core\Request;

class Router
{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = 'App\Controllers\\';

    public function __construct()
    {
        $this->request= new Request();
        $this->routes= Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        #RUN MIDDLEWARE HERE
        $this->run_route_middleware();
    }   

    private function run_route_middleware(){
        $middleware = $this->current_route['middleware'];
        foreach($middleware as $middleware_class){
            $middleware_obj = new $middleware_class;
            $middleware_obj->handle();
        }
    }

    public function findRoute(Request $request)
    {

        foreach($this->routes as $route){
            
            if(!in_array($request->method(),$route['methods'])){
                return false;
            }

            if($this->regex_matched($route)){
                return $route;
            }
        }

        return null;   
    
    }

    public function regex_matched($route){

        global $request;

         $pattern="/^". str_replace(['/','{','}'] , ['\/','(?<','>[-%\w]+)'],$route['uri']) ."$/";
         $result = preg_match($pattern,$this->request->uri(),$matchs);

         if(!$result){
            return false;
         }
         foreach($matchs as $key=>$value){
             if(!is_int($key)){
                $request->add_route_param($key,$value);
             }
         }

         return true;
    }

    public function dispatch404(){
        header("HTTP/1.1 404 Not Found");
        view('errors.404');
        die();
    }

    public function run()
    {
        #405 : invalid request method
        
        #404 : uri not exists
        if(is_null($this->current_route))
            $this->dispatch404();

        $this->dispatch($this->current_route);
        
    }
    private function dispatch($route)
    {
        $action = $route['action'];
        #action NULL
        if(is_null($action) || empty($action))
            return;
        #action : clousure
        if(is_callable($action))
            $action();
        #action : Controller@method
        if(is_string($action))
            $action = explode('@',$action);
        #action : ['Controller','method']
        if(is_array($action)){
            $className =self::BASE_CONTROLLER . $action[0];
            $method =$action[1];

            if(!class_exists($className))
                throw new Exception("Class $className Not Exists !");
            
            $controller = new $className();
            
            if(!method_exists($controller , $method))
                throw new Exception("Method $method Not Exists in class $className");
            
                $controller->{$method}();
        }
    }
}