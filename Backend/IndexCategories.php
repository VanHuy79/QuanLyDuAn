<?php
include_once "Connect.php";
?>
                <?php
                include_once "header.php";
                ?>

            <!-- MAIN CONTENT-->
            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                             
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                    <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                           <a href="CreateCategories.php"> <i class="zmdi zmdi-plus"></i>ADD</button></a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                       
                                        <thead>
                                            <tr>
                                               
                                                <th>TÊN LOẠI SẢN PHẨM</th> 
                                                <th>MÃ LOẠI SẢN PHẨM</th>  
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        <?php
                                           $query=mysqli_query($conn,"select * from LOAISP");
                                          // $index = 1;
                                           while($row=mysqli_fetch_array($query))
                                           {
                                             echo '
                                               <tr>
                                                
                                                 <td>'.$row['TENLSP'].'</td>
                                                 <td>'.$row['MALSP'].'</td>
                                                 <td><a href="EditCategories.php?MALSP='.$row['MALSP'].'"><button class="btn btn-warning">Edit</button></a></td>
                                                 <td><a href="DetailCategories.php?MALSP='.$row['MALSP'].'"><button class="btn btn-primary">Details</button></a></td>
                                                 <td><a href="DeleteCategories.php?MALSP='.$row['MALSP'].'"><button class="btn btn-danger">DELETE</button></a></td>
                                               </tr>
                                             ';
                                           }
                                        ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <?php
                        include_once "fooder.php";
                        ?>
                        