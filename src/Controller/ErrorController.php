<?php

namespace PIC\Controller;

class ErrorController extends AbstractController
{
    public function index()
{
    $this->render('error/404.html.twig');
}

    /**
     * @return void
     */
    public function error404()
    {
        $this->render('error/404.html.twig');
    }
}