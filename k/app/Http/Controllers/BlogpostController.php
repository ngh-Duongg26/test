<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogpostController extends Controller
{

    public function index()
    {
        return view('blog-post');
    }

}
