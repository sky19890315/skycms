<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午11:34
 */
header("content-type:text/html;charset=utf-8");
//引入文件
include_once 'includes/SystemComponent.php';
include_once 'includes/DbConnector.php';
//调用smarty
include_once "smarty/Smarty.class.php";
$smarty = new smarty();


//静态调用
$pdo = DbConnector::getInstance();
//查询数据并调用显示
    $sql = "SELECT id, title FROM cmsarticles ORDER BY Id DESC LIMIT 0,5";
    $arr = $pdo->queryAll($sql);

    //送到模板文件
    $smarty->assign('arr',$arr);
//循环遍历
$smarty->display("index.html");
