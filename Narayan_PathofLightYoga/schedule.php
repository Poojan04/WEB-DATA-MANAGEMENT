
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

<main>
<!-- The new article tag. -->
         <br>
<div>
          <img class="float_left" src="images/yogalounge.jpg" alt="yoga lounge" height="300" width="800" >
</div>
<div class="clr">
           <h2 >Yoga Schedule</h2>
             Mats, blocks, and blankets provide. Please arrive 10 minutes before your class begins. 
             Relax in our Serenity Lounge before or after your class. 
    </div>     <p>



 <?php
 
?>


<table>
 <?php 

  include 'dbconnection.php';
 
$conn = OpenCon();
    $query = "SELECT c.classname, t.time,d.daysid from schedule s
INNER JOIN class c on s.classid= c.classid 
INNER JOIN time t on s.timeid=t.timeid
inner join days d on s.daysid=d.daysid
ORDER by d.daysid;";

$result=$conn->query($query);

            $table_1 = '<table>  

 <caption><strong>Monday - Friday</strong></caption>
   <tr>
    <th>Time</th>
  <th>Classes</th>
  </tr>';
  $table_2 = '<table>
  <caption><strong>Saturday & Sunday</strong></caption>
<tr>
    <th>Time</th>
  <th>Classes</th>
  </tr>;';

  
  while($row = $result->fetch_assoc()) {
    if($row['daysid'] == 1){// Weekdays
                  $table_1 = $table_1."<tr> <td>".$row['time']."</td> <td>".$row['classname']."</td> </tr>";
                }else{ //weekends
                  $table_2 = $table_2."<tr> <td>".$row['time']." </td> <td> ".$row['classname']."</td> </tr>";
                } 

  }
  $table_1 = $table_1."</table>";
            $table_2 = $table_2."</table>";

            echo $table_1;

            echo $table_2;
?>
  
</main>
<!-- Marking the footer section -->
         
          <footer> 
            Copyright © 2016 Path of Light Yoga<br> 
            <a href="mailto:pooja@narayan.com">pooja@narayan.com</a>
         </footer>

<!-- Closing the #page section -->

</div>

  </body>
  
</html>
