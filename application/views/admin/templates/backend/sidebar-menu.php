<!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo site_url("admin"); ?>"><i class="fa fa-home"></i> Dashboard </a>
                  
                                </li>
                                <li><a><i class="fa fa-edit"></i> Sale <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                               
                                        <li><a href="<?php echo site_url("admin/order"); ?>">Orders</a> </li>
                                       
                             
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Poducts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url("admin/categories"); ?>">Categories</a>
                                        </li>
                      
                                        <li><a href="<?php echo site_url("admin/products"); ?>">Products</a>
                                        </li>
                                        <li><a href="icons.html">Group</a>
                                        </li>
                                        <li><a href="glyphicons.html">Coupons</a>
                                        </li>
                             
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.html">Customers</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Customer Approval</a>
                                        </li>
                                          <li><a href="tables_dynamic.html">Site Admins</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Reports <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" >
                                        <li><a href="chartjs.html">New Orders</a>
                                        </li>
                                        <li><a href="chartjs2.html">Orders Completed</a>
                                        </li>
                                        <li><a href="morisjs.html">Orders Processing</a>
                                        </li>
                                        <li><a href="echarts.html">Order Failed </a>
                                        </li>
                                        <li><a href="other_charts.html">Order Return </a>
                                        </li>
                                    </ul>
                                </li>
								
								<li><a href="<?= base_url('index.php/admin/logout')  ?>">Logout </a></li>
                            </ul>
                        </div>
                       

                    </div>
                    <!-- /sidebar menu -->