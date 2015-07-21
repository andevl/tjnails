<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
   public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function show($id)
    {
            $gallery = Gallery::find($id);
            return view('gallery.show')->with('gallery', $gallery);
    }

    public function create()
    {
            return view('gallery.create');
    }

    public function store()
    {

        $file = Input::file('image');
        $destinationPath = 'uploads'; // give path of directory where you want to save your files
        $filename = rand(1111,9999) . '.' . Input::file('image')->guessExtension();
        $image = Input::file('image')->move($destinationPath, $filename);


              Gallery::create([
                    'image' => '/'.$image
                ]); 
        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit')->with('gallery', $gallery);
    }

    public function update($id)
    {
        $category = Gallery::find($id);
        $file = Input::file('image');
        $destinationPath = 'uploads'; // give path of directory where you want to save your files
        $filename = rand(1111,9999) . '.' . Input::file('image')->guessExtension();
        $image = Input::file('image')->move($destinationPath, $filename);


              $category->update([
                    'image' => '/'.$image
                ]); 
              
        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('gallery.index');
    }
}
