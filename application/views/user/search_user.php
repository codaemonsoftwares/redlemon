<?php 
    /*
     * Class Name	: Layout
     * Description	: This class will act as a layout manager for all the pages
     * Author		: Atindra Biswas
     * Date			: 18/02/2010
     */ 
?>
<div class="page-header">

    <div class="page-title"><h3>User Management<small>search user</small></h3>
    </div>

    <div id="reportrange" class="range">

        <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
        </div>

        <div class="date-range">
        </div>

    </div>
</div>
<!-- /page header -->
<!-- Breadcrumbs line -->

<div class="breadcrumb-line">
    <ul class="breadcrumb">
        <li><a href="index-2.html">Home</a></li>
        <li><a href="basic_tables.html">User Management</a></li>
        <li class="active">Search User</li>
    </ul>

    <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
    </div>
    <ul class="breadcrumb-buttons collapse">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> 

                <span>Search
                </span> <b class="caret"></b></a>

            <div class="popup dropdown-menu dropdown-menu-right">

                <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>

                    <span>Quick search
                    </span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
                </div>

                <form action="#" class="breadcrumb-search">
                    <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">

                    <div class="row">

                        <div class="col-xs-6">
                            <label class="radio">
                                <input type="radio" name="search-option" class="styled" checked="checked">Everywhere
                            </label>

                        </div>

                        <div class="col-xs-6">
                            <label class="radio">
                                <input type="radio" name="search-option" class="styled">Users
                            </label>

                        </div>
                    </div>
                    <input type="submit" class="btn btn-block btn-success" value="Search">
                </form>
            </div></li>
    </ul>
</div>
<!-- /breadcrumbs line --> 

<!-- Start of user listing table --> 
<div class="tabbable page-tabs">    
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-justify"></i> Manage Users</h6>
        </div> 
        <div class="datatable"> 
            <table class="table table-striped"> 
                <thead> 
                    <tr> 
                        <th><input type="checkbox" name="checkRow" class="styled" /></th>                         
                        <th>First Name</th> 
                        <th>Last Name</th> 
                        <th>Email</th> 
                        <th>City</th> 
                        <th>Phone OI</th> 
                        <th>Email OI</th> 
                        <th>Post OI</th> 
                         <th>DOI</th> 
                        <th>Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    <?php
                    $count = 1;
                   //echo "<pre>";
                   //print_r($users );
                  //echo "</pre>";
                    foreach ($users as $value) {
                        ?>
                        <tr><td> <input type="checkbox" name="checkRow" class="styled" /> </td>                            
                            <td> <?php if(isset($value['first_name'])){ echo $value['first_name']; } ?> </td>
                            <td> <?php if(isset($value['last_name'])){ echo $value['last_name']; } ?> </td>
                            <td>
                                <?php if(is_array($value['email'])){                                    
                                    foreach($value['email'] as $data){ ?>                                     
                                     <div class="table_second_row"><?php echo $data['email_id']; ?> </div>                          
                                <?php } } ?>
                               </td>                           
                            <td><?php if(isset($value['place'])){ echo $value['place'];  } ?></td>
                            <td><?php if(is_array($value['phone'])){                                    
                                    foreach($value['phone'] as $data){    ?>                                
                                       <div class="table_second_row">
                                        <select name="phone_optin">
                                             <option <?php if($data['telephone_optin_flag'] == 1){ echo "selected";} ?>>Yes</option>
                                            <option <?php if($data['telephone_optin_flag'] == 0){ echo "selected";} ?>>No</option>
                                        </select>
                                       </div>                                   
                                  <?php  } 
                                  } ?></td>
                            <td><?php if(is_array($value['email'])){                                    
                                    foreach($value['email'] as $data){    ?>                                
                                       <div class="table_second_row">
                                        <select name="post_code_optin">
                                            <option <?php if($data['email_optin_flag'] == 1){ echo "selected";} ?>>Yes</option>
                                            <option <?php if($data['email_optin_flag'] == 0){ echo "selected";} ?>>No</option>
                                        </select>
                                       </div>                                   
                                  <?php  } 
                                  } ?>
                               </td>
                            <td><?php if(is_array($value['post_code'])){                                    
                                    foreach($value['post_code'] as $data){    ?>                                
                                       <div class="table_second_row">
                                        <select name="post_code_optin">
                                             <option <?php if($data['post_code_optin_flag'] == 1){ echo "selected";} ?>>Yes</option>
                                            <option <?php if($data['post_code_optin_flag'] == 0){ echo "selected";} ?>>Yes</option>
                                        </select>
                                       </div>                                   
                                  <?php  } 
                                  } ?></td>
                            <td><?php if(is_array($value['email'])){                                    
                                    foreach($value['email'] as $data){    ?>                                
                                       <div class="table_second_row">
                                        <select name="post_code_optin">
                                            <option <?php if($data['double_optin_flag'] == 1){ echo "selected";} ?>>Yes</option>
                                            <option <?php if($data['double_optin_flag'] == 0){ echo "selected";} ?>>No</option>
                                        </select>
                                       </div>                                   
                                  <?php  } 
                                  } ?>                              
                            </td>
                            <td>
                                <a href="<?php echo base_url()."user/view_details/".$value['_id']; ?>" class="btn btn-link btn-icon btn-xs tip" title="View Details"><i class="icon-expand2"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs tip" title="Delete"><i class="icon-remove3"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs tip" title="Blacklist"><i class="icon-user-block"></i></a>
                            </td>                                                         
                        </tr> 
                        <?php $count++; ?>
                    <?php } ?>
                </tbody> 
            </table> 
        </div> 
    </div> 
    <!-- End of user listing table --> 

</div>

