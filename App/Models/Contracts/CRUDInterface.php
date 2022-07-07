<?php

namespace App\Models\Contracts;

interface CRUDInterface{
    #Create(INSERT)
    public function create(array $data) : int;

    #Read(SELECT : single OR multiple)
    public function find($id) : object;
    public function get(array $columns,array $where) : array;
    
    #Update(UPDATE)
    public function update(array $data,array $where) : int;
    
    #Delete(DELETE)
    public function delete(array $where) : int;
}