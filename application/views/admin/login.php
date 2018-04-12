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
                  
					<?php echo form_open('login/admin_login'); ?>
                        <h1>Login Form</h1>
                        <div>
						    <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'email','value'=>set_value('email')]); ?> 
                        </div>
                        <div>
						    <?php //echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password' ]); ?>
                          <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div id ="btn_clicked">
						    <button type="submit" class="btn btn-default submit" >Log in </button>
                           
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator"></div>
                    </form>
                    <!-- form -->
                </section>
				
				<div>   <?php echo "<div style='color:white' align='center'>";
				   echo validation_errors(); 
				   echo "</div>";
				   
				   ?> </div>
                <!-- content -->
            </div>
        </div>
    </div>



	
<?php // include 'templates/backend/jscript1.php' ?>
<?php include 'templates/backend/footer.php' ?>
