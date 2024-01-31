<?php

$host="localhost";
$user="root";
$password="";
$dbname="bookstore";

$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error);
}