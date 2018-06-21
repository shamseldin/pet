 <!DOCTYPE html>
<html>
 <head>
   <meta charset = "utf-8">
   <title> log in</title>

  </head>
 <style>
   body{font-family: Arial.Tahome;background-repeat: no-repeat;font-family: 'Open Sans',sans-serif;margin: 0}
     body{background: url(' content.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
      -o-background-size: cover;color: #FFF;
}
     .overlay{
    background: rgba(49, 55, 61, .8); /* el safafea el 3ala sora */
    width: 1366px;height: 638px}
    
    .container {width: 1200px; margin: auto}
    
     form{padding: 150px 30px}
 
     legend{background: #FFF;border: 1px solid#CCC;padding: 10px;border-radius: 10px}
     
     table {height: 100%;display: table}
      .text-center {text-align: center}
     .upper {text-transform: uppercase}


     input{margin-bottom: 10px;padding: 8px;width: 300px;border-radius: 10px;display: block;margin: 20px auto; background: transparent;color: #FFF ;border: 1px solid #ffffff}
      ::-webkit-input-placeholder{color: #FFF ;}
      :-moz-placeholder{color: #FFF ;}
     ::-moz-placeholder{color: #FFF ;}
 :-ms-input-placeholder{color: #FFF ;}

     .form .buttons button{background: transparent;padding: 5px 0;width: 180px;
       font-size: 14px;border: 1px solid #909090;margin: 10px 8px;border-radius: 10px;background-color: #f7600e; color: #FFF;
      -webkit-transition: all .5s ease-in-out;
       -moz-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out}

     
 </style>
 <body >
   <div class="form">
  <div class= "overlay">
   <div class="container">
    <div class="table-row">
     <div class= "intro text-center">
   <form action="adminlog.php" method="post">
     
    
            <input type= "text" name="name" placeholder= "your name">
  
          
            <input type ="password" name="password" placeholder="number">
           
                   <div class= "buttons">
      <button class="upper"name="submit"> Log in </button>
   
                
               </div>
      
   </form>
     </div>
    </div>
    </div>
   </div>
   </div>
 
     
  
 </body>
</html>

<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
 
  $Password = $_POST['password'];


   $link = mysqli_connect("localhost","root","");

   mysqli_select_db($link, "blog");

 $query=mysqli_query($link,"select * from admin where name = '$name' and Password = '$Password'");
   
    if(mysqli_num_rows($query)==1) {
      $_SESSION['message'] = "You are now logged in";
       $_SESSION['name'] = $name;
       header("location: post.php");
    }else{
        $_SESSION['message'] = "error";
    }

  //}

}



?>

