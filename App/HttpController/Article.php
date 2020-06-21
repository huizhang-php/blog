<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use Library\Config\HttpStatus;
use Library\Model\ArticleModel;

class Article extends Controller
{

    public function index()
    {

    }

    public function defaultArticle()
    {
        $result = ArticleModel::getInstance()->defaultArticle();
        $this->writeJson(HttpStatus::SUCCESS, $result);
    }

}