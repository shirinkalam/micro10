<?php
namespace App\Controllers;

class PostController
{
    public function single()
    {
        global $request;
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