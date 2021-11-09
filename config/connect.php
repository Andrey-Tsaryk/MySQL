<?php
$connect = mysqli_connect('localhost', 'root', '', 'crud2');
if(!connect){
    die('Ошибка к подключении к базе данных');
}