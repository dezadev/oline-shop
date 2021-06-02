<?php

namespace App\Controllers;

use Config\View;

class Pages extends BaseController
{
	public function index()
	{
		// return view('layout/home');
		return view('index');
	}
	public function servis()
	{
		return View('pages/servis');
	}
	public function porto()
	{
		return View('pages/porto');
	}
	public function about()
	{
		return View('pages/about');
	}
	public function team()
	{
		return View('pages/team');
	}
	public function contac()
	{
		return View('pages/contac');
	}
}
