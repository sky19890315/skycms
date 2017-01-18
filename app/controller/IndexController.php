<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-18
 * Time: 下午10:38
 */

    class IndexController extends Controller{
        public function indexAction(){
            $this->smarty->display('index.html');
        }


    }