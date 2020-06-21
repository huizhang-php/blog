<?php
namespace Library\Model;

use EasySwoole\Component\Singleton;

class DocModel
{
    use Singleton;

    public function getDocPath()
    {
        return EASYSWOOLE_ROOT.'/Doc/';
    }

}
