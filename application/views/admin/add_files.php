
<?php    $this->load->view('./common/header'); ?> 
<?php    $this->load->view('./common/top_menu'); ?> 
  

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <div class="container-fluid mt--7">
      <div class="row">
         <?php if($this->session->flashdata('item')){ echo $this->session->flashdata('item'); } ?> 
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-light  ">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add Files</h3>
                </div>
                 
              </div>
            </div>
            <div class="card-body">
                <form action="../uploads/save" method="post" enctype="multipart/form-data">
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">File Name</label>
                        <input name="name"  required type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="">
                      </div>
                    </div>
                      <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Users</label>
                        <select  required name="user"  class="form-select form-control form-control-alternative" aria-label="Default select example">
                            <option value=" "> User</option>
                            <?php foreach ($get_users as $key => $value) {  
                                echo  "<option value=".$value->id.">".$value->name."</option>";
                            }?>
                           
                            

                        </select>
                  </div>
                       </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">File </label>
                       <input required class="form-control form-control-alternative" type="file" name="userfile" size="20" />
                      
                      </div>
                    </div>
                     
                  </div>
                  
                    
                     <div class="row">
                    
                    
                       
                        <div class="col-lg-6">
                      <div class="form-group focused">
                         <input   type="submit"  value="save" class="btn btn-primary">
                      </div>
                    </div>
                  </div>
                    
                    
                    
                </div>
              
                 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

                </div>
                <!-- /.container-fluid -->

           
   <?php    $this->load->view('./common/footer'); ?> 
