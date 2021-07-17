
<?php    $this->load->view('./common/header'); ?> 
<?php    $this->load->view('./common/top_menu'); ?> 
  

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Uploads</h1>
                   <form action="" method="GET">
                    <div class="row">
                        <!---->
                       <div class="col-md-12">
                    <p class="mb-4"></p>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                         <div class="card-header py-3">
                            <a href="<?php echo base_url();?>uploads/add"  class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>File name</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
 
                                    <tbody> 
                                        <?php if(count($user_files)>0){  
     foreach ($user_files as $key => $value) {  
          
         ?>
                                        <tr>
                                             <th><?php echo $value->name;?></th>
                                             <th>
                                                 <?php if ($_SESSION['ids']==$value->upload_by) {?>
                                                 <a href="<?php echo base_url();?>uploads/edit/<?php echo base64_encode($value->id);?>" ><i class="fa fa-edit" aria-hidden="true"></i></a> 
                                                 <?php }?>
                                                 <a href="<?php echo base_url();?>uploads/view/<?php echo base64_encode($value->id);?>" ><i class="fa fa-eye" aria-hidden="true"></i></a> </th>
                                             
                                        </tr>
                                        
                                        <?php  } } else {
                                           
                                       }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
 </div>
                </div>
                <!-- /.container-fluid -->

             
        <!-- End of Content Wrapper -->

   <?php    $this->load->view('./common/footer'); ?> 
