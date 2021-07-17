
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
                <form action="../update" method="post">
                    <input type="hidden" value="<?php echo $user_id;?>" name="user_id">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input name="name"  required type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="<?php echo $get_guest_details->name;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Address </label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"> <?php echo $get_guest_details->address;?></textarea>
                      </div>
                    </div>
                     
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone no:</label>
                        <input name="phone"  type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Phone number" value="<?php echo $get_guest_details->phone;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Email</label>
                        <input name="email" required type="email" id="input-last-name" class="form-control form-control-alternative" placeholder="Email" value="<?php echo $get_guest_details->email;?>">
                      </div>
                    </div>
                      
                      
                  </div>
                    
                    <div class="row">
                    
                    
                      
                       <div class="col-lg-5">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Status</label>
                        <select name="status"  class="form-select form-control form-control-alternative" aria-label="Default select example">
<?php 
 $a_select='';
 $b_select='';
if ($get_guest_details->status==1){
    $a_select='selected';
} else {
     $b_select='selected';
}
?>
                            <option selected> Select status</option>
  <option  <?php echo $a_select;?> value="1">Active</option>
  <option <?php echo $b_select;?> value="0">In active</option>
 
</select>
                  </div>
                       </div>
                      
                          
                        <div class="col-lg-5">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input name="password"  type="password" id="password" class="form-control form-control-alternative" placeholder="password" value="">
                     
                      </div>
                                 
                    </div>
                         <div class="col-lg-2">
                          <div class="form-group form-check mt-5">
    <input type="checkbox" class="form-check-input" id="checked">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
                  </div> </div>
                    
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
               <script>
    $(document).ready(function(){
        $('#checked').click(function(){
            if($(this).is(":checked")){
               $("#password").attr("required", "true");
               
            }
            else if($(this).is(":not(:checked)")){
           $("#password").attr("required", "false");
            }
        });
    });
</script>