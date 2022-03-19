<?php
//require_once("Controllers/users_controller.php");

    class HomeController{
        public function verifSession(){
            session_start();
            $sessionOpen = $_SESSION["iniciaSesion"];
            
            //Verify if the session is null. Only when de user
            //enter directly to Viws/home.php 
            if($_SESSION["iniciaSesion"] == null){
                echo '<script>
                    window.location = "../Views/login.php"
                </script>';
            }
            
            //Verify if the session is false. Only when the 
            //user was entered to Views/login.php and then enter to View/home.php
            if($sessionOpen == "false"){
                echo '<script>
                    window.location = "../Views/login.php"
                </script>';
            }
        }
    }

?>