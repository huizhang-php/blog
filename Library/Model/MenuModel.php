<?php
namespace Library\Model;

use EasySwoole\Component\Singleton;

class MenuModel
{
    use Singleton;

    public function topMenus()
    {
        $docPath = DocModel::getInstance()->getDocPath();
        $spiderJson = file_get_contents($docPath.'spider.json');
        return json_decode($spiderJson, true);
    }

}