<?php
namespace App\Controllers;

class TodoController
{
    public function list()
    {
        #DB
        $data = [
            'tasks' => [ 'First Task', 'Second Task', '10th Task', 'Test Task', 'Another Task'],
            'title'=>'لیست تسک ها'
        ];

        view('todo.list' ,$data);
    }
}