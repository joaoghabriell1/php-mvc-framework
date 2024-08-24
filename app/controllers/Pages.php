<?php

class Pages extends Controller
{
    private $postModel;

    public function __construct()
    {
        //echo "Pages loaded";
    }

    public function index()
    {
        $data = ['title' => 'Welcome',];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'About page'];
        $this->view('pages/about', $data);
    }
}
