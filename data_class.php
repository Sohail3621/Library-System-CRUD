<?php
session_start();
include("db.php");

class data extends db{

function __construct(){

      //echo  "Working!";
}

function adminLogin($t1,$t2){

      $q="SELECT*FROM admin where email= '$t1' and password= '$t2' ";
      $recordSet=$this -> connection->query($q);
      $result=$recordSet->rowCount();

      if($result > 0){
            foreach($recordSet->fetchAll() as $row){
                $logid=$row['id'];
                $_SESSION["adminid"]=$logid;
            header("location:admin_service_dashboard.php"); }
      }
      elseif($result <= 0){
            header("location:index.php?msg=Invalid Credentials!");
      }

}

}
