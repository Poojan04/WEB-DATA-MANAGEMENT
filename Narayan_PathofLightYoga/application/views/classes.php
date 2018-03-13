<!-- The new article tag. The id is supplied so it can be scrolled into view. -->
  	     <article class="ar">
<div>
<img src="<?php echo base_url()?>assets/images/yogamat.jpg" alt="yoga mat" height="300" width="800">
</div>
<div class="clr">
  		     <h2 >Yoga Classes</h2>
         </div>
<!--Defination list. -->
           <div>  

<?php  if( !empty($result) ) {

foreach ($result as $row)    {
        echo "  <strong>" .$row->classname. " </strong> <br>&nbsp;&nbsp;&nbsp; " . $row->classdescription. "<br> <br>";
    }}
?>
<!-- { 
        echo "  <strong>". $row["classname"]. " </strong> <br>&nbsp;&nbsp;&nbsp; " . $row["classdescription"]. "<br> <br>";
    } -->
            </div>
  	     </article>
