<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        return view('blog');
        echo'<h3 style ="color:red">Status:'.$request->route('status').'</h3>';
    }
    public function edit()
    {
        $title="SliderController-edit";
        return view('blog',[

            'mtitle'=>$title
        ]);
    }

}
