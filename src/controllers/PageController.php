<?php
namespace Acme\Controllers;

class PageController extends BaseController
{
    public function getShowHomePage()
    {
        //require_once __DIR__ . '/../../views/home.php';
        //echo $this->twig->render('home.html');
        return view('home', ['test' => 'Hello again!!!']);
    }
}
