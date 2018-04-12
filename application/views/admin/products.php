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
               
               <div><h1>Products </h1>  </div>
                    
               <!-- row start-->     
                   <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">   
                          <div class="x_content x_panel">
                              
                                  <thead>
                                    <table class="table">
                                      <thead>    
                                          <tr class="">
                                               <td colspan="5">    <div class="glyphicon glyphicon-th-list">  </div> Products List </td>
                                                <td colspan="5" align="right"> 
                                                    <div class="btn btn-primary glyphicon glyphicon-plus"></div>
                                                    <div class="btn btn-danger  glyphicon glyphicon-trash"></div>
                                                </td>
                                          </tr>
                                       </thead> 
                                        
                                            <tr style="background:#f4f4f4">
                                                <th>#</td>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Price</td>
                                                <th>Status</th>
                                                <th>Action</th>
                                           
                                            </tr>
                                            
                                      
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td></td>
                                                <td>#2010</td>
                                                <td>Rs 211</td>
                                                <td>Enabled</td>
                                                <td><div class="btn btn-success glyphicon glyphicon-pencil">     </div></td>
                                            
                                   
                                            </tr>
                                            <tr>
                                                <th scope="row">1</td>
                                                <td></td>
                                                <td>#2010</td>
                                                <td>Rs 190</td>
                                                <td>Enabled</td>
                                                <td><div class="btn btn-success glyphicon glyphicon-pencil">   </div></td>
                                         
                            
                                            </tr>
                                            <tr>
                                               <th scope="row">1</td>
                                                <td></td>
                                                <td>#2010</td>
                                                <td>Rs 200</td>
                                                <td>Enabled</td>
                                                <td><div class="btn btn-success glyphicon glyphicon-pencil">     </div></td>
                                              
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


