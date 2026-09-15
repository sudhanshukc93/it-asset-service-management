<?php
$host=getenv('DB_HOST')?:'localhost'; $port=getenv('DB_PORT')?:'3306';
$db=getenv('DB_NAME')?:'it_asset_db'; $user=getenv('DB_USER')?:'admin'; $pass=getenv('DB_PASSWORD')?:'';
$conn=new mysqli($host,$user,$pass,$db,(int)$port);
if($conn->connect_error) die('Database connection failed: '.htmlspecialchars($conn->connect_error));
$conn->set_charset('utf8mb4');