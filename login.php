<?php
  session_start();
  $message=" ";
  if(count($_POST)>0)
    { $conn =  mysqli_connect("fdb26.awardspace.net", "3318186_db" ,"dharam21823804","3318186_db" );
     if (!$conn) 
       { 
         die("Connection failed: " . mysqli_connect_error());
       }
      $login_id=$_REQUEST["login_id"];
      $pass=$_REQUEST["pass"];
      $sql="SELECT * FROM university WHERE email_id='$login_id' and pwd='$pass' ";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
     
      if(is_array($row))
       { $_SESSION["id"]=$row["id"];
         $_SESSION["sch_no"]=$row["sch_no"];
         $_SESSION["s_name"]=$row["s_name"];
         $_SESSION["dept"]=$row["dept"];
         $_SESSION["course"]=$row["course"];
         $_SESSION["sem"]=$row["sem"];
       
       
       }
      else 
        $message="Invalid login_id or password";
     }
  if(isset($_SESSION["id"]))
     header("location:user_index.php");
?>
<html>
    <head> 
    <title>user login</title>
    <style>
        body{ background-color:coral;}
    </style>
    </head>
    <body>
      <form name="fname" action=""; method="POST">
          <div class="message">
             <?php 
                 if($message !=" ")
                    echo $message;
             ?>
          </div>
          <h4 align="center">Enter registration login details</h4>
           <div style="text-align:center">login_id<input type="text" name="login_id"></div><br>
           <div style="text-align:center">password<input type="password" name="pass"></div><br>
          <div style="text-align:center"> <input type="submit" name="submit" value="submit">
           <input type="reset"> </div>
      </form>
    </body>
</html>
