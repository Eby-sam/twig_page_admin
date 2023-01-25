<?php

namespace PIC\Controller;

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home/home.html.twig');
    }

    public function test(){
        $this->render('test/test.html.twig');
    }

    public function home() {
        self::index();
    }
}