<?php 
    include "model/user.php";
    if(isset($_GET['option'])){
        switch($_GET['option']){
            case 'home': 
                include "views/home.php";
                break;
            case 'signin': 
                include "views/user/signin.php";
                break;
        }
    }else{
        include "views/home.php";
    }
?>