<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午10:15
 */
include_once 'SystemComponent.php';
include_once 'DbConnector.php';
$pdo = new DbConnector();
$sql = "select * from customers";
$re = $pdo->queryAll($sql);
var_dump($re);