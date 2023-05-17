<?php

if(!isset($_SESSION)){
    session_start();
}else{
    session_destroy();
}
header("location: index.html");