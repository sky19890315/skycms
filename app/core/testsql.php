<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午10:15
 */

include_once 'DbConnector.php';
$pdo =DbConnector::getInstance();
$sql = "select * from cmsarticles";
$re = $pdo->queryAll($sql);
