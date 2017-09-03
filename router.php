<?php
/**
 * Created by PhpStorm.
 * User: piyurisahu
 * Date: 02/09/17
 * Time: 11:45 PM
 */

include_once ('helper.php');
$op = $_REQUEST['operation'];
switch ($op)
{
    case 1:
        $e = $_REQUEST['txtemail'];
        $p = $_REQUEST['txtpass'];
        if(user_login($e,$p))
        {
            echo "welcome login succesfull";
        }
        else
        {
            echo "login failed <a href='index.php'>home</a>";
        }
        break;
    case 2:
        $email = $_REQUEST['txtemail'];
        $password = $_REQUEST['txtpass'];
        $mobile = $_REQUEST['txtmobile'];
        if(user_register($email,$password,$mobile))
        {
            echo "Registation succesful <a href='index.php'>HOME</a>";
        }

        else
        {
            echo "Registation failed <a href='index.php'>HOME</a>";

        }
}