


<?php


$db=mysqli_connect ("111.118.215.242", "rydef1gn_ryde", "Welcome","rydef1gn_ryde") ;

 

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <div class="b1">
  <title>Ryde Foundation</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    /* Make the image fully responsive */
  .carousel-inner img {
      width:120%;
      height: 500px;
  }
</style>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-3"> 
  <img src="http://www.rydefoundation.in/rydefndimages/image/bg.png" class="float-left"  width="100" height="100"> 
  </div>
  <div class="col-sm-6">
<center><h1 style="font-family: Castellar;">RYDE FOUNDATION</h1></center>

 <center> <p style="font-size: 29px; font-family:Algerian;"><b>R</b>ural <b>Y</b>outh <b>D</b>evelopment <b>E</b>ducation </p></center>
</div>
<div class="col-sm-2">
  <br>
 solomon@rydecs.com
   <br>044-27973411
   
    </div>
<div class="col-sm-1">
  <br>
<button style="margin-left:-35px;"type="button" class="btn btn-info" ><a href="http://www.rydefoundation.in/rydefndhtml/students_admin/st_adminlogin.php" style="text-decoration: none;color: white;">Register/login</a></button>
</div>

    </div>
    </div>
</head>
<body>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  
 <ul class="navbar-nav">
    <li class="nav-item" >
      <a class="nav-link " href="Index.html">Home</a>
      
    </li>

    <li class="nav-item">
      <a class="nav-link" href="webdeveloper.php">profile</a>
      
    </li>
    
   
      
  
     <li class="nav-item">
      <a class="nav-link" href="training.html">Training</a>
      
    </li>
    
     
     <li class="nav-item">
      <a class="nav-link" href="contactus.html">Contact Us</a>
     
    </li>

  </ul>
 
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text">
    <button class="btn btn-success" type="submit" style="margin-left: 270px;">Search</button>
  </form>
</nav>
</nav>

  </div>
</div>
  

  
 
  <?php

// include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from st_user"); // fetch data from database

while($data = mysqli_fetch_array($records))
{ 

 ?>
 <div class="media border p-7"> 
   <img src="https://www.pngfind.com/pngs/m/608-6087418_man-icon-free-icon-man-hd-png-download.png" class="align-self-start mr-3" style="width:300px;height: 300px;">
    <div class="media-body">
 <table style="width:100%">
 
      
   <tr> 
  <td><h4> <b id="">Name: </b><?php echo $data['st_name']; ?></h4></td> </tr> 


        <tr> <td><b>Role:</b><?php echo $data['st_role']; ?></td>  



       <td> <b>College:</b><?php echo $data['st_clg']; ?></td> </tr> 



         <tr> <td>  <b> Branch:</b><?php echo $data['st_branch']; ?></td>  


          <td>  <b> Batch:</b><?php echo $data['st_batch']; ?></td></tr>  

             <tr> <td>  <b>Learning at Ryde Center:</b><?php echo $data['st_studing']; ?> </td>  


              <td> <b> Web Pages Developed:</b><?php echo $data['st_wpd']; ?></td></tr>  

               <tr><td> <b>Ambition in life:</b><?php echo $data['st_ambition']; ?></td>  

               <td><b>Hobbies:</b><?php echo $data['st_hobbies']; ?></td></tr>  

                                 
                 

                    <tr> <td><b>Fathers Name:</b><?php echo $data['st_fname']; ?></td>  

                                <td><b> Fathers Job:</b><?php echo $data['st_fjob']; ?></td></tr>  

                            <tr> <td>  <b> Mothers Name:</b><?php echo $data['st_mname']; ?>
  <td><b>Mothers Job:</b><?php echo $data['st_mjob']; ?></td>  </tr>
                                                  


          <tr>   

          <td> <b >Address:</b><?php echo $data['st_addr']; ?></td></tr>
                                                     
   </table>
    </div>
<br><br>
<br><br>
  </div><br><br><br>
<?php
}
?>
  
<br>
<footer>
 
<div class="container text-center">
  <div class="row">
    <div class="col-sm-4">
<center>      <h2>Address</h2></center>
<br>
    <center>  <p style="font-size: 16px"> <i class="fas fa-home"style="font-size: 16px"></i>

     Old No:42a,New noL:65/1<br>
  Opposite to All Women Police,Station,<br>Ponneri Road,<br>
      Ponneri 601 204</center></p>
    </div>
    <div class="col-sm-4">
     <center> <h2>Weblinks</h2></center>
<br>
     <center> <p style=" font-size: 16px"> <i class="fas fa-envelope"style="font-size: 16px"> </i>
contact@rydecs.com</p>
     <p style=" font-size: 16px"> <i class="fas fa-globe"style="font-size: 10px"></i>www.rydes.com</p></center>
    </div>
    <div class="col-sm-4">
    <center>  <h2><i class="fas fa-phone-volume"style="font-size: 22px"> </i> Contact Us</h2>   </center>  
    <br>   
   <center>    
      <p style=" font-size: 16px">044-2797 3411</p>
      <p style=" font-size: 16px"> 9840073411 </p>
      </center>
    </div>
  </div>
</div>
</body>
</html>