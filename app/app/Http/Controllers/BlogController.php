<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Laravel\Lumen\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function _list()
    {
        $result = Blog::all();
        
        return $result;
    }

    //
}
