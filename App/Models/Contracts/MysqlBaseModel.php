<?php
namespace App\Models\Contracts;

class MysqlBaseModel extends BaseModel{
    
    public function __construct(){
        #if MYSQL = set mysql connection
        try{
            $this->connection =new \PDO("mysql:dbname={$_ENV['DB_NAME']};host{$_ENV['DB_HOST']}",$_ENV['DB_USER'],$_ENV['DB_PASS']);
            $this->connection->exec("set names utf8;");
        
        }catch(PDOException $e){
            echo "Connection Faild".$e->getMessage();
        }
    }

        #Create(INSERT)
        public function create(array $new_data) : int
        {
            // $data_json = json_encode($data);
            return 1;
        }
    
        #Read(SELECT : single OR multiple)
        public function find($id) : object
        {
            return (object)[];
        }
        
        public function getAll() : array
        {
            return [];
        }
    
        public function get(array $columns,array $where) : array
        {
            return [];
        }
        
        #Update(UPDATE)
        public function update(array $data,array $where) : int
        {
            return 1;
        }   
        
        #Delete(DELETE)
        public function delete(array $where) : int
        {
            return 1;
        }

}