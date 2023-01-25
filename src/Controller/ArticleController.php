<?php

namespace PIC\Controller;

use RedBeanPHP\R;
use PIC\Controller\AbstractController;
use RedBeanPHP\RedException;
use RedBeanPHP\RedException\SQL;
use Symfony\Component\ErrorHandler\Debug;

Debug::enable();

class ArticleController extends AbstractController {

    public function index()
    {
        $this->render('home/home.html.twig');
    }


    /**
     * @throws RedException
     * @throws SQL
     */
    public function addArticle()
    {
        $article = R::dispense('article');
        $article->title = $this->dataClean($this->getFormField('title'));
        $article->content = $this->dataClean($this->getFormField('content'));
        $insert = R::store($article);
        self::index();
    }


}
