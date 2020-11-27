<?php

namespace App\Controllers;

class Auth extends BaseController
{

	public function login()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/login');
	}

	public function register()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/register');
	}

	public function logout()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		session()->destroy();
		return redirect('/');
	}

	public function admin()
	{
		echo view('potong/admin_header');
		echo view('potong/admin_footer');
		return view('auth/admin');
	}

	public function index()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/index');
	}

	public function skye()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/skye');
	}
	public function patch()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/patch');
	}

	public function askvalorant()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/askvalorant');
	}

	public function about()
	{
		echo view('potong/auth_header');
		echo view('potong/auth_footer');
		return view('auth/about');
	}
}
