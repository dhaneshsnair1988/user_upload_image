
<?php $this->load->view('./common/header'); ?> 
<?php $this->load->view('./common/top_menu'); ?> 



<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container-fluid mt--7">
        <div class="row">
            <?php if ($this->session->flashdata('item')) {
                echo $this->session->flashdata('item');
            } ?> 
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
                        <form action="../update" method="post" enctype="multipart/form-data">
 <input name="file_id"    type="hidden"  value="<?php echo $id; ?>">
 <input type="hidden" id="change_file" name="change_file">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">File Name</label>
                                            <input name="name"  required type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="<?php echo $get_file->name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Users</label>
                                            <select name="user"  class="form-select form-control form-control-alternative" aria-label="Default select example">
                                                <option value=""> User</option>
                                                <?php
                                                foreach ($get_users as $key => $value) {
                                                    $selected = '';
                                                    if ($get_file->upload_to == $value->id) {
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option $selected  value=" . $value->id . ">" . $value->name . "</option>";
                                                }
                                                ?>



                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <?php if ($image_format == 1) { ?>
                                            <img class="img-responsive" width="50%" src="<?php echo base_url() . '/user_uploads/' . $get_file->file_path; ?>">
<?php } else { ?>
                                            <a class="p-3" href="<?php echo base_url() . '/user_uploads/' . $get_file->file_path; ?>"><?php echo $get_file->name; ?></a>
<?php } ?>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">File </label>
                                            <input id="upload_image" class="form-control form-control-alternative" type="file" name="userfile" size="20" />

                                        </div>

                                    </div>


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


<?php $this->load->view('./common/footer'); ?> 
