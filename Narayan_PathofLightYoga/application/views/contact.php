         <article class="ar">

           <h2>Contact Path of Light Yoga Studio</h2>
           <p>Required information is marked with an asterisk (*).</p>


<?php 
  $nameError ="";
  $emailError ="";
  $attributes = array('class' => 'form','id'=>"form");
?>
<?php echo form_open('Contact', $attributes); ?>
<?php $attributes1 = array('class' => 'label');?>
<?php $attributes2 = array('id' => 'name','name' => 'name','class' => 'input');?>
<?php $attributes3 = array('id' => 'email','name' => 'email','class' => 'input');?>
<?php $attributes4 = array('rows' => "2", 'name' => 'comments','cols'=>"20",'class' => 'textarea');?>

<?php echo form_label('*Name:','',$attributes1); ?>
<?php echo form_input($attributes2 );  echo '<br>'; ?>
<?php echo form_label('*E-mail:','',$attributes1); ?>
<?php echo form_input($attributes3);  echo '<br>'; ?>
<?php echo form_label('*Comments:','',$attributes1); ?>
<?php echo form_textarea($attributes4); echo '<br>'; ?>
<?php echo form_submit(array('id' => 'Submit', 'value' => 'Send now')); ?>
<?php echo form_close(); ?>


   
         </article>
