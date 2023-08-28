<?php
    // Add cookie,
    // setcookie("favorite_food","pizza",time() + (86400*2),"/");

    // Remove cookie,
    // setcookie("favorite_food","pizza",time() - 0,"/");

    setcookie("fav_food","pizza",time() - 0,"/");
    setcookie("fav_drink","coffe",time() + (86400*3),"/");
    setcookie("fav_desert","ice-cream",time() + (86400*4),"/");

    // write cookies,
    /*foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}" . "<br>";
    }*/

    // check cookie,
    if(isset($_COOKIE["fav_food"])){
        echo "buy some {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I don't know your favorite food";
    }

?>