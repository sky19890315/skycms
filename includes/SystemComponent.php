<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-16
 * Time: 下午7:12
 */
class SystemComponent{
    var $settings;
     public function getSettings(){
        //系统变量
        $settings['dbhost']     =   'localhost';
        $settings['dbusername'] =   'root';
        $settings['dbpassword'] =   'root';
        $settings['dbname']     =   'mydb';
        return
        $settings;
                            }

                        }
?>








