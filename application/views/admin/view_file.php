
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
                          
                         
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php if($image_format==1) {?>
                                        <img class="img-responsive" width="50%" src="<?php echo base_url().'/user_uploads/'.$get_file->file_path;?>">
                                        <?php }else{ ?>
                                        <a class="p-3" href="<?php echo base_url().'/user_uploads/'.$get_file->file_path;?>"><?php echo $get_file->name;?></a>
                                        <?php }?>
                                    </div>  
                                </div>
                             
                    </div>
 </div>
                </div>
                <!-- /.container-fluid -->

             
        <!-- End of Content Wrapper -->

   <?php    $this->load->view('./common/footer'); ?> 
