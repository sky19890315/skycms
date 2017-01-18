<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-17
 * Time: 下午7:04
 */
    //获取url传参
include_once 'includes/DbConnector.php';
include_once 'smarty/Smarty.class.php';
    $smarty = new smarty();
    $id = $_GET['id'] ?? null;

    /*从URL获取参数 并放入数组中 作为查询条件*/
    $pdo = DbConnector::getInstance();
    /*需要返回字符串显示文章详细页*/
    $sql = "select * from cmsarticles WHERE id = {$id}";
    //调用query查询，返回一维数组
    $arrone = $pdo->queryOne($sql);



    $smarty->assign("arrone",$arrone);
    $smarty->display("viewArticle.html");