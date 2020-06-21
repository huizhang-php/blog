<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use Library\Config\HttpStatus;
use Library\Model\MenuModel;

class PageElement extends Controller
{

    public function index()
    {

    }

    public function topMenus()
    {
        $result = MenuModel::getInstance()->topMenus();
        $this->writeJson(HttpStatus::SUCCESS, $result);
    }

}