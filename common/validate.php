<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/1/2019
 * Time: 8:43 AM
 */

// email : abc@gmail.com
    function isEmail($input){
        return preg_match('/[a-z0-9]@[a-z]{3,}\.[a-z]{3}$/',$input);
    }

    //fix
    function isTel($input){
        return preg_match('^/[0-9]/',$input);
    }

?>