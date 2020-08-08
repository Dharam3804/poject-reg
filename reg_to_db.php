<?php 
$servername = "fdb26.awardspace.net";
$username = "3318186_db";
$password = "dharam21823804";
$dbname="3318186_db";

$conn=  mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id =$_POST['id'];
$sch_no =$_POST['sch_no'];
$s_name =$_POST['s_name'];
$email_id =$_POST['email_id'];
$pwd =$_POST['pwd'];
$dept =$_POST['dept'];
$course =$_POST['course'];
$sem =(int)$_POST['sem'];

$sql = "INSERT INTO university VALUES ('$id ','$sch_no','$s_name','$email_id','$pwd','$dept','$course','$sem')";
if(!mysqli_query($conn,$sql))
{
    die('Error in inserting records'.mysqli_connect_error());
}
else{
    ?>
<h1 style="text-align:center">Your registration form is submitted successfully</h1>

<?php
}
$sql2 ="SELECT * FROM university";

$regdata =  mysqli_query($conn,$sql2);
?>


<!doctype html>
<html lang="en">
  <head>
   <style> body{background-color:light blue;}</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="footer, address, phone, icons" />
<link rel="stylesheet" href="event.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>form</title>
    </head>
        <body>

        <div class="container" style="margin-bottom: 50px;margin-top: 50px; border:2px solid black;" >
          <table class="table">
              <tr>
                  <th>id</th>
                  <th>scholar_no</th>
                  <th>name</th>
                  <th>email</th>
                  <th>password</th>
                  <th>department</th>
                  <th>course</th>
                  <th>semester</th>
                 
              </tr>
          <?php while($form = mysqli_fetch_assoc($regdata)) : ?> 
            <tr>
                <td><?php echo $form['id'] ?></td>
                <td><?php echo $form['sch_no'] ?></td>
                <td><?php echo $form['s_name'] ?></td>
                <td><?php echo $form['email_id'] ?></td>
                <td><?php echo "******"?></td>
                <td><?php echo $form['dept'] ?></td>
                <td><?php echo $form['course'] ?></td>
                <td><?php echo $form['sem'] ?></td>
            </tr>
            <?php endwhile; ?>
         </table>
        </div>
  </body>
  </html>