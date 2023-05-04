<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>

<style><?php include'style.css'; ?></style>


<div class="jumbotron text-center">
  <h1>LINK COUNTER </h1>
  <p>Enter keywords to search</p> 
  <body style="background-color:white;">
</div>


<div class="main">
<form method="GET">
  <input type="text" name="keywords" placeholder="Enter keywords">
  <button type="submit">Search</button>
  <div class="center-form">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="aadishwar";
$conn = mysqli_connect($servername, $username, $password,$database);

ini_set('display_errors', 0);


$keywords = $_GET['keywords'] ??NULL ;

if(isset($_GET['keywords'])) {
  
  $query = "SELECT * FROM links WHERE title LIKE '%$keywords%' OR description LIKE '%$keywords%'";
  $result = mysqli_query($conn, $query);


  
}

if(mysqli_num_rows($result) >0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<h3><a  href="'.$row['link'].'" target="_blank">'.$row['title'].'</a></h3>';
    echo '<p>'.$row['description'].'</p>';
    echo '<p>Clicks: '.$row['clicks'].'</p>';
  }
} else {
  echo 'No results found.';
}

if(isset($_GET['keywords'])) {
  $query= "UPDATE links SET clicks = clicks + 1 WHERE title like '%$keywords%'";
  $result = mysqli_query($conn, $query);
  
  }
  else{
    echo"no reult";
  }

?>
</div>
