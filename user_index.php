<?php
 session_start();
?>
<html>
 <head> 
   <style>
     .tab{border:2px solid black;}
     body{background-color:blue;}
   </style>
 </head>
 <body>
   <?php
     if($_SESSION["sch_no"]){
   ?>
  Welcome <?php echo $_SESSION["s_name"];?><br>
         <table class="tab">
           <tr>
              <th>id</th>
              <th>scholar_no</th>
               <th>department</th>
               <th>course</th>
               <th>semester</th>
             </tr>
             <tr>
              <td><?php echo $_SESSION["id"];?></td>
              <td><?php echo $_SESSION["sch_no"];?></td>
              <td> <?php echo $_SESSION["dept"];?></td>
              <td><?php echo $_SESSION["course"];?></td>
              <td><?php echo $_SESSION["sem"];?></td>
              </tr>
            </table>  
          
          
  <br><br>
   <p>  Click to <a href="http://dharam7610.dx.am/assignment/no4/logout.php">logout</a>  </p>
   <?php 
   }
   else
     echo "<h2>please login first</h2>";
  ?>
 </body>    
</html>