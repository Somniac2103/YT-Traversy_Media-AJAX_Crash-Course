<?php

//connect to a database
$conn = mysqli_connect('localhost', 'root', '123456', 'ajaxtest');

$query = 'SELECT * FROM users';

//Get result
$result = mysqli_query($conn, $query);

//fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);
