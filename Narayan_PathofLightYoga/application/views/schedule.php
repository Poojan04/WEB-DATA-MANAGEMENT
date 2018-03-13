
<main>
<!-- The new article tag. -->
         <br>
<div>
          <img class="float_left" src="<?php echo base_url()?>assets/images/yogalounge.jpg" alt="yoga lounge" height="300" width="800" >
</div>
<div class="clr">
           <h2 >Yoga Schedule</h2>
             Mats, blocks, and blankets provide. Please arrive 10 minutes before your class begins. 
             Relax in our Serenity Lounge before or after your class. 
    </div>     <p>





<table>
 <?php 

  
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

   if( !empty($result) ) {

foreach($result as $row)   {// Weekdays
      if($row->daysid == 1){
          $table_1 = $table_1."<tr> <td>".$row->time."</td> <td>".$row->classname."</td> </tr>";
        }else{ //weekends
          $table_2 = $table_2."<tr> <td>".$row->time." </td> <td> ".$row->classname."</td> </tr>";
        } 

  }
}
  $table_1 = $table_1."</table>";
            $table_2 = $table_2."</table>";

            echo $table_1;

            echo $table_2;
?>
  
</main>