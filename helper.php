<?php
/**
 * Created by PhpStorm.
 * User: piyurisahu
 * Date: 02/09/17
 * Time: 11:45 PM
 */
$pdo = new PDO('mysql:host=127.0.0.1;dbname=logbook','root','');
function db_connect()
 {
//$pdo=new PDO('mysql:host=127.0.0.1;dbname=logbook','root','');

    global $pdo;
////     $connection =mysql_connect("localhost","root","");
     if($pdo)
     {
//         mysql_select_db('logbook',$connection);
         return true;
     }
     else{
         return false;
     }

 }

 function user_register($email,$mobile, $password)
 {
     global $pdo;
     if(db_connect())
     {
//         mysql_query("insert into users(email,mobile,password) values('$email','$mobile','$password')");


         $result=$pdo->query("insert into users(email,mobile,password) values('$email','$mobile','$password')");
         var_dump($result);
         return true;

     }
     else
         false;

 }

 function user_login($email,$password)
 {
     global $pdo;
     if(db_connect())
     {
//         $result = mysql_query("select * form users where email ='$email' and password = '$password' ");
         var_dump($email);
         var_dump($password);
         $result =$pdo->query("select * form users where email ='$email' and password = '$password' ");
         var_dump($result);
         if($result)
         {
             return true;
         }
         else
         {
             return false;
         }
     }
 }