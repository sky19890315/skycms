<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午8:59
 */
include_once 'SystemComponent.php';

class DbConnector extends SystemComponent{
    var $pdo = null;

    public  static function getInstance(){
        static $obj = null;
        if ($obj == null){
            $obj = new DbConnector();
        }
        return $obj;
    }

    //链接数据库
    function __construct(){
        //从父类载入数据库设置
        $settings = SystemComponent::getSettings();
        //取得变量
        $host   =   $settings['dbhost'];
        $db     =   $settings['dbname'];
        $user   =   $settings['dbusername'];
        $pass   =   $settings['dbpassword'];
        //pdo调用数据库
        $pdo   =   new PDO('mysql:host='.$host.';dbname='.$db,$user,$pass);
        $this->pdo = $pdo;
        $pdo->exec("set names utf8");
        $pdo->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        register_shutdown_function(array(&$this,'close'));
    }
    //防止克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //函数：queryAll,目的：以关联数组的形式返回结果
   public function queryAll($sql){
        $stm = $this->pdo->query($sql);
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $re = $stm->fetchAll();
        return  $re;
   }
    /*函数：queryOne,目的：以字符串形式取得查询结果*/
    public function queryOne($sql){
        $stm = $this->pdo->query($sql);
        //获得结果 指针下移
        $re  = $stm->fetch();
        return $re;
    }
    /*函数：add, 目的：增删改*/
    public function add($sql){
        //防止sql注入
        $stm = $this->pdo->prepare($sql);
        $re = $this->pdo->exec($sql);
        return $re;
    }

}

?>