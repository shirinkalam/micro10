<?php
namespace App\Models\Contracts;

abstract class BaseModel implements CRUDInterface{
    
    protected $connection;
    protected $table;
    protected $primaryKey = 'id';
    protected $pageSize= '10';
    protected $attributes= [];

    // public function __construct(){
    //     #if MYSQL = set mysql connection
    // }

    protected function getAttributes($key){
        if(!$key or array_key_exists($key , $this->attributes)){
            return null;
        }
        return $this->attributes[$key];
    }

}