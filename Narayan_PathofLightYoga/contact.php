<!DOCTYPE html>
<html lang="en">

  <head>
        <title> PathofLightYoga -1001508253</title>
          <link rel="stylesheet" href="yogam.css">

            <meta charset="utf-8"> 
  <?php
    if(isset($error))
    {
  ?>
     input:focus
     {
       border:solid red 1px;
     }

  <?php
    }
  ?>
  </head>

  <body>
    <!--wrapperfor whole paage with centered 80% view.-->

    <div id="wrapper">
<!-- Defining the #page section with the section tag -->          

<!-- Defining the header section of the page with the appropriate tag -->
             <header> 
                    <h1>Path of Light Yoga Studio</h1>
             </header>   

<!-- The nav link semantically marks your main site navigation -->
               <nav> 
                     <ul>

                       <li><a href="index.php">Home</a></li>
                       <li><a href="classes.php">Classes</a></li>
                       <li><a href="schedule.php">Schedule</a></li>
                       <li><a href="register.php">Register</a></li>
                       <li><a href="contact.php">Contact</a></li>

                     </ul>
                 </nav>

<!-- The new article tag. -->
         <br>
         <article class="ar">

           <h2>Contact Path of Light Yoga Studio</h2>
           <p>Required information is marked with an asterisk (*).</p>
<?php
include 'dbconnection.php';
 
$conn = OpenCon();

$nameError ="";
$emailError ="";

$name = $email="";

 if (isset($_POST['submit'])){
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$comments    = $conn->real_escape_string($_POST['comments']);

#name validation
 if(empty($name))
 {
  $nameError = "enter your name !";
 }

  # Validate Email #
    // if email is invalid, throw error
 if(empty($email))
 {
  $emailError = "enter your email !";
 }
 else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $emailError = "not valid email !";
 }

if(empty($nameError) && empty($emailError)){

$query = "INSERT INTO contact (name,email,comments)
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["comments"]."')";
$result=$conn->query($query);
}
 }
 
CloseCon($conn);
 
?>


 <!-- The new form tag. -->

  <form method="post" id="form">
  


   <label for="Name">*Name:</label>
   <input type="text" name="name" id="Name"> <span class="error">* <?php echo $nameError;?></span>
<br>
   <label for="Email">*E-mail:</label>
   <input type="text" name="email" id="Email">  <span class="error">* <?php echo $emailError;?></span>
   <br>
   <label for="Comments">*Comments:</label>
   <textarea name="comments" id="Comments" rows="2" cols="20"
          ></textarea> 
  <br>
   <input id="Submit" type="submit" value="Send Now" name="submit">     
  
  </form>



         </article>

<!-- Marking the footer section -->
         
          <footer> 
            Copyright © 2016 Path of Light Yoga<br> 
            <a href="mailto:pooja@narayan.com">pooja@narayan.com</a>
         </footer>

<!-- Closing the #page section -->

</div>

  </body>
  
</html>
