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
	public function material_testing()
	{
		return view('testing');
	}
	public function material_characterization()
	{
		return view('characterization');
	}
	public function nondistructivetest()
	{
		return view('ndt');
	}
		public function agriculture()
	{
		return view('agriculture');
	}
	public function automation_system()
	{
		return view('automation');
	}
	public function Engineering()
	{
		return view('Engineering');
	}
	public function medicine()
	{
		return view('medicine');
	}
	public function foodtech()
	{
		return view('foodtech');
	}
		public function measurement_system()
	{
		return view('measurement');
	}
	public function energy()
	{
		return view('energy');
	}

}
