<?php
session_start();
if(!isset($_SESSION["temp"]))
    resetTemp ();
    

function resetTemp()
    {
    $_SESSION["temp"]=0;
    }

 if($_GET){
    if(isset($_GET['offButton'])){
        fn_off();
    }elseif(isset($_GET['onButton'])){
        fn_on();
    }
    elseif (isset($_GET['addButton'])){
        fn_incTemp();
    }
    elseif (isset($_GET['subButton'])){
        fn_decTemp();
    }
    }
 
function formatop($msg){
    return "<h1>".$msg."</h1>";
}

function formattemp($msg){
    return "Temp : ".$msg." C";
}
?>





<!DOCTYPE html>
<html>
<head>
<title>REMOTE</title>
</head>
<body>

    <div id="main">

    <!--<div id="display">
        <h1 style="text-align:center;">SCREEN</h1>
        </br>-->
 <?php
    
    function fn_on()
       {            resetTemp();
            $msg = "ON is called";
            $op = formatop($msg);
            echo  $op;
       }

    function fn_off()
       {
          $msg = "OFF is called";
          $op = formatop($msg);
          echo  $op;
       }

    function fn_incTemp()
       {
          $_SESSION["temp"] += 5;
          $msg = formattemp($_SESSION["temp"]);
          $op = formatop($msg); 
          echo  $op;
       }

    function fn_decTemp()
       {
          $_SESSION["temp"] -= 5;
          $msg = formattemp($_SESSION["temp"]);
          $op = formatop($msg);          
          echo  $op;
       }
    
 ?>

    </div>
       <div style="align-content: center">
             <button id="add" name="onButton" onClick='location.href="?onButton=1"'>ON</button>
    <button id="sub" name="offButton" onClick='location.href="?offButton=1"'>OFF</button>
        </div>
        <div style="align-content: center">
             <button id="add" name="addButton" onClick='location.href="?addButton=1"'>+5</button>
    <button id="sub" name="subButton" onClick='location.href="?subButton=1"'>-5</button>
        </div>
        
    </div>
    

</body>
</html>