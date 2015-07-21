<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ServiceFormRequest;
use App\Http\Controllers\Controller;
use App\Service;
use Input;
use App\Category;

class ServicesController extends Controller
{
    public function index()
    {
    	$services = Service::all();
    	return view('services.index', compact('services'));
    }

    public function show($id)
    {
    		$service = Service::find($id);
    		return view('services.show')->with('service', $service);
    }

    public function create()
    {
            $categories = Category::all();
    		return view('services.create')->with('categories', $categories);
    }

    public function store()
    {

    	Service::create([
    			'category_id' => Input::get('category_id'),
                'title'  => Input::get('title')
    		]);
    	return redirect()->route('services.index');
    }

    public function edit($id)
    {  
        $categories = Category::all();
    	$service = Service::find($id);
    	return view('services.edit', compact('service', 'categories'));
    }

    public function update($id, ServiceFormRequest $request)
    {
    	$service = Service::find($id);
    	    	
    	$service->update([
    			'title' => $request->input('title')
    		]);
    	return redirect()->route('services.index');
    }

    public function destroy($id)
    {
    	$service = Service::find($id);
    	$service->delete();
    	return redirect()->route('services.index');
    }
}
