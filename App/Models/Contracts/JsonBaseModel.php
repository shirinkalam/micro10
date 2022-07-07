<?php
namespace App\Models\Contracts;

class  JsonBaseModel extends BaseModel{

    private $db_folder;
    private $table_filepath;


    public function __construct()
    {
        $this->db_folder = BASEPATH . "/storage/jsondb/";
        $this->table_filepath = $this->db_folder . $this->table . '.json';
    }

    private function readTable() : array
    {  
        $table_data = json_decode(file_get_contents($this->table_filepath));
        return $table_data;
    }

    private function writeTable(array $data)
    {
        $data_json= json_encode($data);
        file_put_contents($this->table_filepath , $data_json);
    }


    #Create(INSERT)
    public function create(array $new_data) : int
    {
        // $data_json = json_encode($data);
        $table_data = $this->readTable();
        $table_data[]=$new_data;
        $this->writeTable($table_data);
        return $new_data[$this->primaryKey] ;
    }

    #Read(SELECT : single OR multiple)
    public function find($id) : object
    {
        $table_data = $this->readTable();
        foreach($table_data as $row){
            if($row->{$this->primaryKey} == $id){
                return $row;
            }
        }
        return null;
    }
    
    public function getAll() : array
    {
        return $this->readTable();
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