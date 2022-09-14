<?php


function success($msg){
    return "<div style='color:black;background:lightgreen;padding:5px;width:auto;'>{$msg}</div>";
}

function danger($msg){
    return "<div style='color:red;background:lightpink;padding:5px;width:auto;'>{$msg}</div>";
}


function set_flashdata($key,$value){
    @session_start();

    $_SESSION['_flash'] = $key;
    $_SESSION[$key]  = $value;
}

function get_flashdata($key){
    @session_start();
    if(isset($_SESSION['_flash'])){
        echo $_SESSION[$key];
    }
    unset($_SESSION[$key],$_SESSION['_flash']);
}