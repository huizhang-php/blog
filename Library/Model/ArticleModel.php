<?php
namespace Library\Model;

use EasySwoole\Component\Singleton;

class ArticleModel
{
    use Singleton;

    public function defaultArticle()
    {

        $topMenus = MenuModel::getInstance()->topMenus();

        $articles = [];
        foreach ($topMenus as $item)
        {
            $spiderPath = DocModel::getInstance()->getDocPath().$item['spider'].'/spider.json';
            $spiderJson = file_get_contents($spiderPath);
            $spiderArr = json_decode($spiderJson, true);
            $articles[] = $spiderArr;
        }
        $articles = array_merge(...$articles);
        shuffle($articles);

        return array_slice($articles, 0, 20);
    }

}
