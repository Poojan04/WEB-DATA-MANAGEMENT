<!DOCTYPE html>
<html lang="en">

  <head>
  	    <title> PathofLightYoga-1001508253</title>
         <link rel="stylesheet" href="yogam.css">

  	        <meta charset="utf-8"> 
  </head>

  <body>
  	<!--wrapperfor whole paage with centered 80% view.-->

    <div id="wrapper">


         <header>
           <h1>Path of Light Yoga Studio</h1>
         </header>  

<!-- The nav link semantically marks your main site navigation -->
         	     <nav> 
                    <ul>

                       <li><a href="<?php echo base_url('index1.php')?>">Home</a></li>
                       <li><a href="<?php echo base_url('classes.php')?>">Classes</a></li>
                       <li><a href="schedule.php">Schedule</a></li>
                       <li><a href="register.php">Register</a></li>
                       <li><a href="contact.php">Contact</a></li>

                     </ul>
                 </nav>
                 <br>
<!-- The new article tag. The id is supplied so it can be scrolled into view. -->
  	     <article class="ar">
<div>
<img src="images/yogamat.jpg" alt="yoga mat" height="300" width="800">
</div>
<div class="clr">
  		     <h2 >Yoga Classes</h2>
         </div>
<!--Defination list. -->
           <div>
<?php
include 'dbconnection.php';
 
$conn = OpenCon();
$query = "SELECT classname, classdescription FROM class";

$result=$conn->query($query);


    while($row = $result->fetch_assoc()) 
    {
        echo "  <strong>". $row["classname"]. " </strong> <br>&nbsp;&nbsp;&nbsp; " . $row["classdescription"]. "<br> <br>";
    }


CloseCon($conn);
 
?>

      </div>
  	     </article>

<!-- Marking the footer section -->
  	     
  	      <footer> 
            Copyright © 2016 Path of Light Yoga <br>
            <a href="mailto:pooja@narayan.com">pooja@narayan.com</a>
         </footer>
</div>
  </body>
  
</html>