<?php 
// https://youtu.be/EgDQ7Z13FQc?si=aDe9fPXy35MsnFE_
setcookie("fav_food", "pizza", time() + 86400); // 86400 seconds = 1 day
setcookie("fav_color", "blue", time() + 86400);
setcookie("fav_movie", "inception", time() + 86400);

    foreach($_COOKIE as $key => $value){
            echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy Some {$_COOKIE['fav_food']}!";
    } 
    else {
        echo "We don't know your favorite food yet.";
    }
?>