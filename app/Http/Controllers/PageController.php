<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* 
*/
class PageController extends Controller
{
	public function home()
	{
		return view('index');
	}
	
	public function about()
	{
		return view('about');
	}

	public function newsandevent()
	{
		return view('news');
	}
	public function contact()
	{
		return view('contact');
	}
	// product
	public function material_research()
	{
		return view('research');
	}
	public function energetic_materials()
	{
		return view('energetic');
	}
	public function general_equipments()
	{
		return view('equipments');
	}
		public function enviromental()
	{
		return view('enviromental');
	}
	public function food_and_agriculture()
	{
		return view('food');
	}
	public function pharmaceuticals()
	{
		return view('pharmaceuticals');
	}

}
