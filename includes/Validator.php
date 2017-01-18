<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-17
 * Time: 下午7:25
 * 防止SQL注入
 */
    include_once 'SystemComponent.php';
    class
    Validator extends SystemComponent {
        //声明属性可以避免系统判断，以加快响应速度
        var $errors = null;


//      判断是否有输入
//      是否仅输入字符而无符号
//      是否仅为字符且没有空格
//      是否为  E-mail地址
//      数字
//      日期
        /*接收来自用户到数据作为输入-保存到变量$theinput中
        同时判断输入到信息，如果为true，说明接收到的是数字，则继续执行，
        否则将错误信息存放如变量$errors中
        */
        function validateNumber($theinput,$description = ''){
            //判断
            if (is_numeric($theinput)){
                return true;
                                      }
            else{
                $this->errors[] = $description;
                return false;
                }

                                                                }

                                        }