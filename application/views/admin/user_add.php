
<?php    $this->load->view('./common/header'); ?> 
<?php    $this->load->view('./common/top_menu'); ?> 
  

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <div class="container-fluid mt--7">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-light  ">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add User</h3>
                </div>
                 
              </div>
            </div>
            <div class="card-body">
                <form action="../users/save" method="post">
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input name="name"  required type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Address </label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
                      </div>
                    </div>
                     
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone no:</label>
                        <input name="phone"  type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Phone number" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Email</label>
                        <input name="email" required type="email" id="input-last-name" class="form-control form-control-alternative" placeholder="Email" value="">
                      </div>
                    </div>
                      
                      
                  </div>
                    
                    <div class="row">
                    
                    
                      
                       <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Status</label>
                        <select name="status"  class="form-select form-control form-control-alternative" aria-label="Default select example">
  <option selected> Select status</option>
  <option value="1">Active</option>
  <option value="0">In active</option>
 
</select>
                  </div>
                       </div>
                        
                        <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input name="password" required type="password" id="input-last-name" class="form-control form-control-alternative" placeholder="password" value="">
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
