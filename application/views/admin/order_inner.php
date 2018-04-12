<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<?php
include 'templates/backend/toppart.php';
?>


  <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <!-- menu prile quick info -->
                     <?php include 'templates/backend/menu-prile-info.php';?>
                    <!-- /menu prile quick info -->
                    <br />

                    <!-- sidebar menu -->
                      <?php include 'templates/backend/sidebar-menu.php';?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                      <?php include 'templates/backend/menu-footer-buttons.php';?>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            
            
             <!--  top-navigation -->
                   <?php include 'templates/backend/top-navigation.php';?>
              <!-- /top-navigation end -->
              
              <!--  page-content start-->
               <div class="right_col" role="main"> 
               
                  <!-- row start-->     
                     <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">   
                                 <div class="x_content x_panel">
                                        <h2>Order #1056 Details</h2>
                                        <div>Payment Via CCAvenue  (167899233) on Jan 5 2018, Time: 4PM </div>
                                     
                                    <div class="row">
                                             <div class="col-md-6 col-sm-12 col-xs-12">
                                                   <h2> General Details </h2>
                                                   <div>Name : Ashok Shah  </div>
                                                   <div>Email : ask@gmail.com </div>
                                                   <div>PhoneNo :  8976543423 </div>
                                                   <div>Order Date:  </div>
                                           
                                             </div>
                                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                    <h2> Billing Details </h2>
                                                   
                                                     Studio 103, <br>
                                                     The Business Centre,<br>
                                                     61 Wellfield Road,<br>
                                                     Roath
 
                                              </div>

                                     </div>
                                 
                                        
                                        
                                        
                                  </div>  
                                  
                                 <div class="x_content x_panel">
                                            
                                  </div>  
                                  
                                  
                             </div><!-- col-md end-->
                             
                              <div class="col-md-4 col-sm-12 col-xs-12">   
                                 <div class="x_content x_panel">
                                        <div> 
                                          <h2 >Status</h2>
                                              <select class="form-control">
                                                    <option>Pending Payment</option>
                                                    <option>Processing </option>
                                                    <option>Completed</option>
                                                    <option>Cancelled</option>
                                                    <option>Failed</option>
                                                </select>
                                          </div>
                                          
                                          <div>
                                          
                                          </div> 
                                          
                                          
                                             
                                  </div>  <!-- x_content end-->    
                                  
                                  
                                  
                                  
                             </div><!-- col-md end-->
                   
                      </div><!-- row end-->
                   
               </div>
                   

                   
              <!-- /page-content end -->
             
             
        </div>
    </div>

<?php include 'templates/backend/jscript1.php' ?>

<?php include 'templates/backend/footer.php' ?>


