<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'      => 'Cyber App - Base',
			'main_title' => 'CyberCake App',
			'content'    => 'home/index',
		];
		return view('home/layoutuser', $data);
	}
	//--------------------------------------------------------------------

}
