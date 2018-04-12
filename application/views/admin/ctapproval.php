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
                        <div class="col-md-9 col-sm-12 col-xs-12">   
                       
                                            <h1>Customers Approval</h1>  

                       
                        </div>
                        
                        <div class="col-md-3 col-sm-12 col-xs-12"> 
                               
                                                      <div class="col-md-3 col-sm-12 col-xs-12">   
                                                           <div class="btn btn-primary "> Approve </div>
                                                      </div>
                                                      <div class="col-md-3 col-sm-12 col-xs-12"> 
                                                           <div class="btn btn-warning">Block  </div>
                                                      </div>
                                                      <div class="col-md-3 col-sm-12 col-xs-12">   
                                                          <div class="btn btn-primary  glyphicon glyphicon-plus"></div>
                                                    
                                                      </div>
                                                      <div class="col-md-3 col-sm-12 col-xs-12">   
                                                         <div class="btn   btn-danger   glyphicon glyphicon-trash"></div>
                                                      </div>
                                            
                        
                         </div>
                           
                    </div>
                    <!-- row end-->     
                    
               <!-- row start-->     
                   <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">   
                          <div class="x_content x_panel">
                              
                                  <thead>
                                    <table class="table">
                                      <thead>    
                                          <tr class="">
                                               <td colspan="5">Customers List </td>
                                                <td colspan="5" align="right"> 
                                     
                                                
                                                </td>
                                          </tr>
                                       </thead> 
                                        
                                            <tr style="background:#f4f4f4">
                                                <th>#</td>
                                                <th>Cusomer Name</th>
                                                <th>Email</th>
                                                <th>Mobile</td>
                                                <th>Status</th>
                                                <th>Building | Flat No</th>
                                                <th>Rating</th>
                                                <th>Date Added</th>
                                                <th>View </th>
                                            </tr>
                                            
                                      
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Anil Gupta</td>
                                                <td>aa@gm.com</td>
                                                <td>8856445227</td>
                                                <td> Approved</td>
                                                <td>Sahyog CHS</td>
                                                <td>2 star</td>
                                                <td>21-05-2117 </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                   
                                            </tr>
                                            <tr>
                                                 <td scope="row">1</td>
                                                <td>Anil Gupta</td>
                                                <td>aa@gm.com</td>
                                                <td>8856445227</td>
                                                <td> Approved</td>
                                                <td>Sahyog CHS</td>
                                                <td>2 star</td>
                                                <td>21-05-2117 </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                      
                                            </tr>
                                            <tr>
                                                   <td scope="row">1</td>
                                                <td>Anil Gupta</td>
                                                <td>aa@gm.com</td>
                                                <td>8856445227</td>
                                                <td> Approved</td>
                                                <td>Sahyog CHS</td>
                                                <td>2 star</td>
                                                <td>21-05-2117 </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                
                                            </tr>
                                            
                                         
                                            
                                            
                                            
                                    
                                        </tbody>
                                    </table>

                                </div>
                    </div><!-- col-md end-->
                   
                   </div><!-- row end-->
                   
                   </div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
              <!-- /page-content end -->
             
             
        </div>
    </div>

<?php include 'templates/backend/jscript1.php' ?>

<?php include 'templates/backend/footer.php' ?>


