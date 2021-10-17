<?php

class HomeController extends BaseController {

	function index(){
		return View::make('pages.index');
	}

	function login(){
		return View::make('login');
	}

}
