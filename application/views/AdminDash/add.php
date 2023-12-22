<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <?= @$this->session->flashdata('result'); ?>
            </div>

            <?php

            $message = $this->session->flashdata("Response");

            if (isset($message)) {
                echo '<div class="alert login_alert alert-danger mx-auto alert-dismissible fade show" role="alert">
  <strong>Error</strong> ' . $message["Message"] . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>   
</div>';
            }


            ?>


            <div class="card-body">
                <form action="<?= base_url(); ?>Admin/add<?= ((@$edit) ? '/' . $edit->id : ''); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Name">Clinic Name</label>
                                <input type="text" id="name" class="form-control" <?= (isset($data) ? 'value="' . $data["Name"] . '"' : ''); ?> required name="Name" placeholder="Enter Here">
                            </div>
                            <div class="text-danger">
                                <?php echo form_error("Name"); ?>
                            </div>
                            <!-- <p>
                                <?php

                                print_r($data);


                                ?>
                            </p> -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Mobile">Clinic Mobile</label>
                                <input type="number" id="mobile" class="form-control" <?= (isset($data) ? 'value="' . $data["Mobile"] . '"' : ''); ?> required name="Mobile" placeholder="Enter Here">
                            </div>
                            <div class="text-danger">
                                <?php echo form_error("Mobile"); ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email"> Clinic E-Mail</label>
                                <input type="text" id="email" class="form-control" <?= (isset($data) ? 'value="' . $data["Email"] . '"' : ''); ?> name="Email" placeholder="Enter Here">
                            </div>
                            <div class="text-danger">
                                <?php echo form_error("Email"); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">Clinic Password</label>
                                <input type="text" id="pwd" class="form-control" <?= (isset($data) ? 'value="' . $data["Password"] . '"' : ''); ?> required name="Password" placeholder="Enter Here">
                            </div>
                            <div class="text-danger">
                                <?php echo form_error("Password"); ?>
                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Reg_No">Clinic Registration Number</label>
                                <input type="text" id="Reg_No" class="form-control" <?= (isset($data) ? 'value="' . $data["Reg_No"] . '"' : ''); ?> name="Reg_No" placeholder="Enter Here">
                            </div>
                        </div>
                        <div class="text-danger">
                            <?php echo form_error("Reg_No"); ?>
                        </div>

                        <div class="col-md-12">
                            <label for="Address">Clinic Address</label>
                            <textarea class="form-control" name="Address" id="address" rows="3"
                                placeholder="Type here ..."> <?= (isset($data) ? $data["Address"] : ''); ?> </textarea>
                            <div class="text-danger mt-3">
                                <?php echo form_error("Address"); ?>
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="1" <?= ((@$edit && $edit->status == "1") ? ' SELECTED' : ''); ?>>ACTIVE</option>
                                    <option value="0" <?= ((@$edit && $edit->status == "0") ? ' SELECTED' : ''); ?>>DE-ACTIVE</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" class="form-control" name="role">
                                    <option value="1" <?= ((@$edit && $edit->status == "1") ? ' SELECTED' : ''); ?>>Admin</option>
                                    <option value="2" <?= ((@$edit && $edit->status == "2") ? ' SELECTED' : ''); ?>>Company</option>
                                    <option value="3" <?= ((@$edit && $edit->status == "3") ? ' SELECTED' : ''); ?>>Health Ministry</option>
                                    <option value="1" <?= ((@$edit && $edit->status == "4") ? ' SELECTED' : ''); ?>>Clinic</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-primary mt-3" type="submit">Add Clinic</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>