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
            
            
             <!-- /top-navigation -->
                   <?php include 'templates/backend/top-navigation.php';?>
              <!-- /top-navigation end -->
              
              <!-- /page-content -->
 
                   <?php include 'dashbord-cont.php';?>
              <!-- /page-content end -->
             
             
        </div>
    </div>
    

<?php include 'templates/backend/jscript1.php' ?>
<?php include 'templates/backend/footer.php' ?>


