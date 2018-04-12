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
                        <div class="col-md-12 col-sm-12 col-xs-12">   
                          <div class="x_content x_panel">
                                   <table class="table">
                                       <tr> 
                                           <td> <h1>Orders</h1>  </td>
                                           <td colspan="4"> <div style="margin-top:20px;" > <a href="#" class="blue">Pending Payment </a> <span>(245)</span> | <a href="#" class="blue">Processing </a> <span>(30)</span> | <a href="#" class="blue">Completed </a> <span>(10)</span>  | <a href="#" class="blue">Cancelled</a> <span>(2)</span>  | <a href="#" class="blue">Failed</a> <span>(4)</span>  </div> </td>
                                           
                                       </tr>
                                       
                                       <tr>
                                           <td>   
                                              <label> Buildings</label>
                                              <select class="form-control">
                                                    <option>Sahyog</option>
                                                    <option>Shrigeri</option>
                                                    <option>Sun Roses</option>
                                                    <option>Sun Plancy</option>
                                                    <option>Deepty Blosam</option>
                                                </select>
                                           
                                           </td>
                                           <td>
                                             <label>Status</label>
                                              <select class="form-control">
                                                    <option>Pending Payment</option>
                                                    <option>Processing </option>
                                                    <option>Completed</option>
                                                    <option>Cancelled</option>
                                                    <option>Failed</option>
                                                </select>
                                           
                                           </td>
                                           
                                           
                                           <td>
                                                  <label> Date : </label>
                                                 <div class="bxbrd"> Select Date </div>
                                           </td>
                                           
                                           
                                           <td>
                                                 <label> Total Orders</label>
                                                 <div class="bxbrd"> Rs 45000 </div>
                                           </td>
                                           
                                           <td>
                                              
                                           </td>
                                           
                                       
                                       </tr>
                                       
                                       
                                       
                                   </table> 
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
                                               <td colspan="5"> Productwise Orders </td>
                                                <td colspan="5" align="right"> 
                                     
                                                
                                                </td>
                                          </tr>
                                       </thead> 
                                        
                                            <tr style="background:#f4f4f4">
                                                <th>#</td>
                                                <th>Date</th>
                                                <th>Order No</th>
                                                <th>Name</td>
                                                <th>Mobile</th>
                                                <th>Building | Flat No</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                                <th>View</th>
                                                <th>Invoice</th>
                                            </tr>
                                            
                                      
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>21-05-2117</td>
                                                <td>#2010</td>
                                                <td>Anil Gupta</td>
                                                <td>8856445227</td>
                                                <td>Sahyog CHS</td>
                                                <td>Rs 500</td>
                                                <td> </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                                <td><div class="btn"><h3><span class="fa fa-download" aria-hidden="true"></span></h3></div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</td>
                                                <td>21-05-2117</td>
                                                <td>#2010</td>
                                                <td>Anil Gupta</td>
                                                <td>8856445227</td>
                                                <td>Sahyog CHS</td>
                                                <td>Rs 500</td>
                                                <td> </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                                <td><div class="btn"><h3><span class="fa fa-download" aria-hidden="true"></span></h3></div></td>
                                            </tr>
                                            <tr>
                                               <th scope="row">1</td>
                                                <td>21-05-2117</td>
                                                <td>#2010</td>
                                                <td>Anil Gupta</td>
                                                <td>8856445227</td>
                                                <td>Sahyog CHS</td>
                                                <td>Rs 500</td>
                                                <td> </td>
                                                <td><div class="btn btn-success"> Veiw   </div></th>
                                                <td><div class="btn"><h3><span class="fa fa-download" aria-hidden="true"></span></h3></div></td>
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


