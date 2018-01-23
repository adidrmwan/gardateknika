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

	public function structure()
	{
		return view('struktur');
	}
		public function machines()
	{
		return view('machines');
	}
	public function laboratory()
	{
		return view('laboratory');
	}
	public function conference()
	{
		return view('conference');
	}
	public function contact()
	{
		return view('contact');
	}
}
