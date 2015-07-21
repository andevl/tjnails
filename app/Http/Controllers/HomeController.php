<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Gallery;
use DB;
use HTML;
class HomeController extends Controller
{
    public function index()
    {
        $categories_five = DB::table('categories')->take(5)->get();
    	return view('Home.index', compact('categories_five'));
    }

    public function services()
    {
        $categories = Category::all();
        $categories_five = DB::table('categories')->take(5)->get();
    	return view('Home.services', compact('categories', 'categories_five'));
    }

    public function contacts()
    {
        $categories_five = DB::table('categories')->take(5)->get();
    	return view('Home.contacts', compact('categories_five'));
    }

        public function gallery()
    {
        $galleries = Gallery::all();
        $categories_five = DB::table('categories')->take(5)->get();
    	return view('Home.gallery', compact('categories_five', 'galleries'));
    }

    public function gallery_show($id)
    {
        $gallery = Gallery::find($id);
        return view('Home.gallery_show', compact('gallery'));
    }
}
