<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{

    public function showAll(){
        $blogs = Blogs::where('status', 1)->where('archive', 0)->orderBy('id', 'desc')->paginate(5);
        return view('pages.blog', compact('blogs'))->with('title', 'Blogs | Vet Clinic and Petcare System');
    }

    public function getBlogId($id){
        $blogs = Blogs::FindOrFail($id);
        /* dd($blogs); */
        return view('pages.subpages.blogs', ['blogs' => $blogs]);
    }
}

/* dd($blogs); */

/* $data = array("blogs" => Blogs::orderBy('id', 'desc')->simplePaginate(5));
/* dd($data); */
/* return view('pages.blog', $data)->with('title', 'Blogs | Vet Clinic and Petcare System'); */ 