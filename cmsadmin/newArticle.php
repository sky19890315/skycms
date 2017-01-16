<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午10:55
 */
include_once '../includes/SystemComponent.php';
include_once '../includes/DbConnector.php';
//判断是否已经提交表单,已提交则继续
if ($HTTP_POST_VARS){
    //静态调用
    $pdo = DbConnector::getInstance();
    //查询语句 插入表单数据
    $insertForm = "INSERT cmsarticles(Title,Tagline,Section,TheArticle)VALUE
    ('{$HTTP_POST_VARS['Title']}','{$HTTP_POST_VARS['Tagline']}','{$HTTP_POST_VARS['Section']}','{$HTTP_POST_VARS['TheArticle']}')";
    //执行数据库操作 并判断结果 返回受影响行数
    $re = $pdo->add($insertForm);
    if ($re !=null){
        //插入成功
        echo '<center>数据插入成功！</center>';
    }else{
        //插入失败
        echo '<center>数据插入失败！</center>';
        exit();
    }
}