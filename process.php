<?php

echo 'Processing...';

//check for POST variable
if (isset($_POST['name'])) {
  echo 'POST: Your name is ' . $_POST['name'];
}

//check for GET variable
if (isset($_GET['name'])) {
  echo 'GET: Your name is ' . $_GET['name'];
}
