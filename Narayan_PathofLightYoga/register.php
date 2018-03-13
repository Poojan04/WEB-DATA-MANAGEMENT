
<!DOCTYPE html>
<html lang="en">

  <head>
        <title> PathofLightYoga -1001508253</title>
          <link rel="stylesheet" href="yogam.css">

            <meta charset="utf-8"> 
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

           <h2>Register Path of Light Yoga Studio</h2>
           <p>Required information is marked with an asterisk (*).</p>

<?php
include 'dbconnection.php';
 
$conn = OpenCon();

// Initialize variables to null.
$nameError ="";
$emailError ="";
$passwordError ="";
$phoneError ="";
$addressError ="";
$classErrMsg="";
$name = $email = $password =$phone =$address = "";


 if (isset($_POST['submit'])){

  $name    = trim($conn->real_escape_string($_POST['name']));
  $email   = $conn->real_escape_string($_POST['email']);

  $password   = $conn->real_escape_string($_POST['password']);
  

  $phone   = $conn->real_escape_string($_POST['phone']);
  $address   = trim($conn->real_escape_string($_POST['address']));
  $classid   = $_POST['classtype'];
  $daysid   =  $_POST['sec'];
  $timeid   =  $_POST['tm'];


#name validation
 if(empty($name))
 {
  $nameError = "enter your name !";
 }
 else
 {
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
 if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password))
{
  // Between start -> ^
// And end -> $
// of the string there has to be at least one number -> (?=.*\d)
// and at least one letter -> (?=.*[A-Za-z])
// and it has to be a number, a letter or one of the following: !@#$% -> [0-9A-Za-z!@#$%]
// and there have to be 8-12 characters -> {8,12}
 $passwordError ="Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
}

# phone validation
if(!is_numeric($phone))
 {
  $phoneError ="Numbers only!";
 }


if(empty($address))
{  // 15 Gordon St, 3121 Cremorne, Australia
 $addressError = "not valid address !";
}

if(empty($nameError) && empty($emailError) && empty($passwordError) && empty($phoneError) && empty($addressError))
      {


        $sql_select = "select * from schedule where classid=".$_POST["classtype"]." and timeid=".$_POST["tm"]." and daysid=".$_POST["sec"];
        $result_select=$conn->query($sql_select);
        if (mysqli_num_rows($result_select) > 0)
        {
          $query = "INSERT INTO client (name,address,phone,email,password)
          VALUES ('".$_POST["name"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".md5($_POST["password"])."')";
          $result=$conn->query($query);

          $query1 = "SELECT MAX(clientid) as clientid from client";
          $result1=$conn->query($query1);

          while($row = $result1->fetch_array())
           {
           $MaxClient = $row['clientid'];
           }

  //echo "".$_POST["classtype"]."  ".$_POST["sec"];

          $query2= "INSERT INTO client_schedule (clientid,timeid,classid,daysid)
          VALUES (".$MaxClient.",".$_POST["tm"].",".$_POST["classtype"].",".$_POST["sec"].")";
  
          $result2=$conn->query($query2);
        }
        else
         {
  //Give User an Error and Tell him all possible schdule(days and time) for that class
            $classErrMsg = "<h4>Please select from below schedule:</h4>";
            $temp="";
            $rowClassName="";
            $sql_getClassSchdeule = "SELECT d.daysname,t.time,c.classname from schedule s INNER JOIN time t on s.timeid=t.timeid INNER JOIN days d on s.daysid=d.daysid INNER JOIN class c on s.classid=c.classid where s.classid=".$_POST["classtype"];
            $result_getclassschedule=$conn->query($sql_getClassSchdeule);

            while($row = $result_getclassschedule->fetch_array())
             {
               $temp = $temp."<h5>Available on ".$row['daysname']." at ".$row['time']."</h5>";
               $rowClassName = $row['classname'];
             }
             $classErrMsg = "<h4>For ".$rowClassName." please select from below schedule:</h4>".$temp;
          
          }

         }
   else
   {
      echo $nameError;
      echo $passwordError;
      echo $emailError;
      echo $addressError;
      echo $phoneError;  echo "not inserted!";
   }
 
 }

 ?>


 <!-- The new form tag. -->
        <h4><?php echo $classErrMsg; ?></h4>

  <form method="POST" id="form" action="register.php">
  

   <label for="name">*Name:</label>
   <input type="text" name="name"> 
   <span class="error">* <?php echo $nameError;?></span>
<br>
   <label for="Email">*E-mail:</label>
   <input type="email" name="email" >
   <span class="error">* <?php echo $emailError;?></span>
<br>
    <label for="Password">*Password:</label>
    <input type="password" name="password" id="Password">
    <span class="error">* <?php echo $passwordError;?></span>
<br>
   <label for="Phone">*Phone:</label>
   <input type="tel" name="phone" id="Phone">
   <span class="error">* <?php echo $phoneError;?></span>
<br>
   <label for="Address">*Address:</label>
   <textarea  rows="3" name="address"></textarea>
   <span class="error">* <?php echo $addressError;?> </span>

  <p>
   <label>*Type of Class</label>
   <select name="classtype">
     <?php
      $query = "SELECT classid,classname FROM class";

      $result=$conn->query($query);
      while($row = $result->fetch_assoc()) 
          {
              echo "  <option value= ". $row['classid']. ">". $row['classname']. " </option> ";  
          }

      ?> 
  </select></p>
<p>
   <label>*Schedule</label>
   <select name="sec">
    <?php
        $query = "SELECT daysid,daysname FROM days";

        $result=$conn->query($query);
        while($row = $result->fetch_assoc()) 
        {
                echo "  <option value= ". $row['daysid']. ">". $row['daysname']. " </option> ";  
        }

    ?>
    <!-- <option value="Monday-Friday">Monday-Friday</option>
    <option value="Saturday-Sunday">Saturday & Sunday</option> -->
  </select></p>
<p>
   <label>*Time</label>
   <select name="tm">
    <?php
        $query = "SELECT timeid,time FROM time";

        $result=$conn->query($query);
        while($row = $result->fetch_assoc()) 
        {
                echo "  <option value= ". $row['timeid']. ">". $row['time']. " </option> ";  
        }
        CloseCon($conn);

    ?>
  
  </select></p>

<p>   <input id="Submit" type="submit" value="Send Now" name="submit">   
  
</p>

  </form>

 <!-- <script>
    function myFunction() 
    {
    document.getElementById("form").reset();
    }
</script> -->


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
