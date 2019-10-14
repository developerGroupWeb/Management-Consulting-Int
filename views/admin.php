<?php
if(isset($_SESSION['email']) && isset($_SESSION['password'])){
    echo "Welcome {$_SESSION['email']} <br/> <br/><a class='btn btn-group-lg btn-info' href='?view=logout'>Log out</a><br/><br/>";
}else{
    header('Location:main.php');
}





