
<?php    $this->load->view('./common/header'); ?> 
<?php    $this->load->view('./common/top_menu'); 
 
?> 
  

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User List</h1>
            
                    <p class="mb-4"></p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="./users/add"  class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
 
                                    <tbody> 
                                        <?php if(count($get_user_list)>0){  
     foreach ($get_user_list as $key => $value) {  ?>
                                        <tr>
                                            <th> <?php echo $value->name;?></th>
                                            <th><?php echo $value->email;?></th>
                                            <th><?php echo $value->status== 1 ? 'Active' : 'Inactive ';?></th>
                                             <th><a href="./users/edit/<?php echo $value->id;?>" ><i class="fa fa-edit" aria-hidden="true"></i></a> </th>
                                        </tr>
                                        
                                        <?php  } } else {
                                           
                                       }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

             
        <!-- End of Content Wrapper -->

   <?php    $this->load->view('./common/footer'); ?> 
