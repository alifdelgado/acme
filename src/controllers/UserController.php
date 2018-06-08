<?php
namespace Acme\Controllers;

use Acme\Models\User as User;
use Acme\Classes\Validator as Validator;

class UserController extends BaseController
{
	public function getShowRegisterPage()
    {
    	//echo $this->twig->render('register.html');
			return view('register');
    }

    public function getShowLoginPage()
    {
        //echo $this->twig->render('login.html');
				return view('login');
    }
}
