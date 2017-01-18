<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午11:34
 */
header("content-type:text/html;charset=utf-8");
include 'library/smarty/Smarty.class.php';
include 'app/core/Controller.php';
//调用指定控制器
include 'app/controller/IndexController.php';
$controller = new IndexController();
$controller->indexAction();
