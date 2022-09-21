<?php
include ('function.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    removeArticle($id);
    goUrl('http://lessonn-2022.test/json.php');
}else{
    goUrl('http://lessonn-2022.test/json.php');
}