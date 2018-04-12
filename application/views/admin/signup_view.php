<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<?php
include 'templates/backend/toppart.php';
?>



         
         
            
<div class="">
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                   
                
                <?php echo form_open('signup'); ?>
<h1>Registration Form</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
  <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname', 'value'=>set_value('dname'), 'placeholder'=>'Name')); ?><br />

 <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail', 'value'=>set_value('demail'), 'placeholder'=>'Email')); ?><br />

  <?php echo form_error('dmobile'); ?><br />
<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.', 'value'=>set_value('dmobile'), 'placeholder'=>'Mobile')); ?><br />

  <?php echo form_error('dpwd'); ?><br />
<?php echo form_input(array('id' => 'dpwd', 'name' => 'dpwd', 'placeholder'=>'Password')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
                
                    <!--<form>
                        <h1>Sign up</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Name" required />
                        </div>
                        
                        <div>
                            <input type="text" class="form-control" placeholder="eMail" required />
                        </div>
                        
                     <div>
                            <input type="text" class="form-control" placeholder="Mobile" required />
                        </div>
                        
                        <div>
                            <input type="password" class="form-control" placeholder="Set Password" required />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Register</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator"></div>
                    </form>
                    <!-- form -->
              
                </section>
                <!-- content -->
            </div>
        </div>
    </div>
       
             
             
    


<?php include 'templates/backend/footer.php' ?>


