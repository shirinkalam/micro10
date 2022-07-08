<?php
namespace App\Controllers;

use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;
        $author_id = 2;


        $user =new User(2);
        nice_dump($user->name);


        $slug = $request->get_route_param('slug');
        echo "slug : $slug<br>";
    }

    public function comment()
    {
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug : $slug<br>comment : $cid";
    }
}