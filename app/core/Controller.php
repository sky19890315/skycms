<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-18
 * Time: 下午10:42
 */
    class Controller{
        public $smarty = null;
        //构造函数 初始化对象 需要子类去实例化
        //在入口文件中实例化
        public function __construct()
        {
            //include_once '../../library/smarty/Smarty.class.php';
            $this->smarty = new smarty();
            $this->smarty->setConfigDir("app/config");
            $this->smarty->setTemplateDir('app/view');
            $this->smarty->setCompileDir('app/runtime/tpl');
            $this->smarty->setCacheDir('app/runtime/cache');
            $this->smarty->cache_lifetime = 3600;
            $this->smarty->caching = false;
            $this->smarty->left_delimiter = "{";
            $this->smarty->right_delimiter = "}";


        }
    }

?>