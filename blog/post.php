<!DOCTYPE html>
<html>
 <head>
   <meta charset = "utf-8">
   <title> Post </title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
   <style>
    .navbar {
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #f7600e !important;
  }
  .navbar form button{ background-color:  #f7600e !important;}
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
   	
  body{font-family: 'Open Sans',sans-serif;margin:0;
       background-repeat: no-repeat; 
        background: url('admin.jpg');color: #f7600e;}

   .overlay{ background: rgba(49, 55, 61, .8); width: 100%;height: 100%}
    fieldset{padding:50px 173px }
    header {margin: 20px;}
    .row{margin: 20px}

    
    span{text-transform: uppercase;}

    textarea{background-color: #eeeff0; border-radius: 10px; overflow: auto;margin: 20px} 

    button{background: transparent;padding: 5px 0;width: 180px;background-color: #f7600e;color: #FFF;
            font-size: 14px;border: 1px solid #909090;margin: 0 8px;border-radius: 10px;text-transform: uppercase}
  
   </style>

  <body>
   <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BLOG</a>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home1.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="blog.php">Log Out</a></li>
          
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  <div class= "overlay">
  	<div class="container">	
    <form  name="postadmin" method="post">
  <fieldset>
  	  <header class="tools">
         	<input type="file" name="image"><br>
         	
         </header> 
     <div class="row">
     	<form method="POST" accept="admin.php">
     		<legend> <span class="label label-primary">title </span> </legend>
     	<textarea rows="4" cols="69" placeholder="write" name="title" ></textarea><br>
     	<legend> <span class="label label-primary">creat a post </span> </legend>
     	<textarea rows="10" cols="69" placeholder="write" name="posting"></textarea><br>
  <button class="upper" name="submit"> post </button>
     	</form> 
     	</div>
     
     </fieldset>
     </form>
     </div>
     </div>
  </body>
  </html>

<?php

include 'mysql-connection.php';

if(isset($_POST['submit'])){
  $target = "images/".basename($_FILES['image']['name']);
  
  $image = $_FILES['image']['name'];
  $title = $_POST['title'];
   
  $post = $_POST['post'];


  
if( mysqli_query($link,"INSERT INTO post (image,title,post) VALUES ('$image','$title','$post')"));
     {
       header("location: home1.php");
      
     }
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       $msg = "Image uploaded successfully";

            }else{
              $msg ="There was a proplem uploading image";
            }
    

  mysqli_close($link);
}




?>