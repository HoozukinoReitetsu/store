<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 2/28/2019
 * Time: 8:48 PM
 */
    function checkInput($str){
        $str = trim($str);
        $str = stripcslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }
    function checkEmpty($str){
        if(strcmp($str,"") == 0){
            return false;
        }
        return true;
}
?>