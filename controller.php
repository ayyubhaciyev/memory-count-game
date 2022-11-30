<?php

session_start();
$message = null;

$levelForm = true; 
$viewForm = false;

if(isset($_POST['levelSend'])){
    $level = $_POST['level'];
    if($level == 0){
        $_SESSION["rnd"] = rand(1,10);
        $_SESSION["count"] = 3;
        $levelForm = false; 
        $viewForm = true;
    }else if($level == 1){
        $_SESSION["rnd"] = rand(1,25);
        $_SESSION["count"] = 5;
        $levelForm = false; 
        $viewForm = true;
    }else{
        echo "Error!!";
    }
}

if(isset($_POST['send'])){
    $levelForm = false; 
    $viewForm = true;
    $number = $_POST['number'];
    if($_SESSION["count"] == 1 && $number != $_SESSION["rnd"]){
        $message = "Təəssüf!!";
        $viewForm = false;
        session_unset();
    }else if($number == $_SESSION["rnd"]){
        $message = "Təbriklər!!";
        $viewForm = false;
        session_unset();
    }else if($number > $_SESSION["rnd"]){
        $message = "Aşağı!";
        $_SESSION["count"]--;
    }else{
        $message = "Yuxarı!";
        $_SESSION["count"]--;
    }

   
}