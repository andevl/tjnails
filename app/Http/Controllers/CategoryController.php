<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Requests\CategoryFormRequest;
use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('category/index', compact('categories'));
    }

    public function create()
    {
    	return view('category/create');
    }

		public function store()
				{

        $file = Input::file('image');
        $destinationPath = 'uploads'; // give path of directory where you want to save your files
        $filename = rand(11,99) . '.' . Input::file('image')->guessExtension();
        $image = Input::file('image')->move($destinationPath, $filename);


		      Category::create([
		      		'title' => Input::get('title'),
		      		'image' => '/'.$image
		      	]); 

				return Redirect()->route('category.index');

				}
				public function edit($id)
		    {
		    	$category = Category::find($id);
		    	return view('category.edit')->with('category', $category);
		    }

		    public function update($id)
		    {
		    	$category = Category::find($id);
		    	$file = Input::file('image');
        $destinationPath = 'uploads'; // give path of directory where you want to save your files
        $filename = rand(11,99) . '.' . Input::file('image')->guessExtension();
        $image = Input::file('image')->move($destinationPath, $filename);
		    	    	
		    	$category->update([
		    			'title' => Input::get('title'),
		    			'image' => '/'.$image
		    		]);
		    	return redirect()->route('category.index');
		    }

		    public function destroy($id)
		    {
		    	$category = Category::find($id);
		    	$category->delete();
		    	return redirect()->route('category.index');
		    }
}
