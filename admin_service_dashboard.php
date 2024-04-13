<?php
session_start();

$adminid=$_SESSION["adminid"];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="">
    </head>

    <style>
    .imglogo{
        margin:auto;
    }
    .innerdiv{
        text-align: center;
        margin: 100px;
    }
    .leftinnerdiv{
        float:left;
    }
    .greenbtn{
        background-color: rgb(6,170,16);
        color: white;
        width: 95%;
        height: 40px;
        margin-top: 8px;
    }
    </style>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
        <div class="innerdiv">
        <div class="row"><img class="imglogo" src="C:\xampp\htdocs\dashboard\website\image\logo1.png"></div>
        <div class="leftinnerdiv">
            
            <Button class="greenbtn">Admin</Button>
            <Button class="greenbtn" onclick="openpart('addbook')" >ADD BOOK</Button>
                   <Button class="greenbtn" onclick="openpart('bookreport')">BOOK REPORT</Button>
                   <Button class="greenbtn" onclick="openpart('bookrequestapprove')">BOOK REQUEST</Button>
                   <Button class="greenbtn" onclick="openpart('addperson')">ADD PERSON</Button>
                   <Button class="greenbtn" onclick="openpart('studentecord')">STUDENT REPORT</Button>
                   <Button class="greenbtn" onclick="openpart('issuebook')">ISSUE BOOK</Button>
                   <Button class="greenbtn" onclick="openpart('issuereport')">ISSUE REPORT</Button>
                   <a href="index.php"><Button class="greenbtn"> LOGOUT</Button></a>
        </div>

        </div>        
        </div>
        
        <script src="" async defer></script>
    </body>
</html>