<?php namespace App\Controllers;

class Auth extends BaseController
{

	public function login()
    {

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            $validate = $this->validate($rules);
            if ($validate) {
                return view('auth/index');
            } else {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
        }
        return view('auth/login');
    }
    
    public function register()
	{
		if ($this->request->getMethod() === 'post') {
			$rules = [
				'first_name' => [
					'label' => 'First Name',
					'rules' => 'required|min_length[2]'
				],
				'last_name' => [
					'label' => 'Last Name',
					'rules' => 'required'
				],
				'username' => [
					'label' => 'Username',
					'rules' => 'required|alpha_numeric|is_unique[users.username]'
				],
				'email' => [
					'label' => 'E-Mail',
					'rules' => 'required|valid_email|is_unique[users.email]'
				],
				'password' => [
					'label' => 'Password',
					'rules' => 'required|min_length[6]'
				],
				'cpassword' => [
					'label' => 'Password Confirmation',
					'rules' => 'required|matches[password]'
				]
			];
			$validate = $this->validate($rules);
			if ($validate) {
				$newUser = [
					'first_name' => $this->request->getPost('first_name'),
					'last_name' => $this->request->getPost('last_name'),
					'username' => $this->request->getPost('username'),
					'email' => $this->request->getPost('email'),
					'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
				];
				return redirect('auth/login');

			} else {
				return redirect('auth/register')->withInput()->with('validation', $this->validator);
			}
		} else {
			return view('auth/register', ['validation' => null]);
        }
    }

	public function logout()
	{
		session()->destroy();
        return redirect('/');
    }
    
    public function admin()
    {
        return view('auth/admin');
    }

    public function index() 
    {
        return view('auth/index');
    }
}
