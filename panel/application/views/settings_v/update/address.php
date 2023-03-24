                            <div class="tab-pane" id="address" role="tabpanel">
                                <div class="card border-0 rounded-4 shadow py-2 card-bg">
                                    <div class="card-header card-bg">
                                        <h5 class="card-title text-color mb-0">
                                            <strong><?php echo $this->lang->line('address'); ?></strong>
                                        </h5>
                                    </div>
                                    <div class="card-body mx-2">
                                        <form action="<?php echo base_url("settings/address_update"); ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 mt-3">
                                                        <label for="text" class="form-label text-color"><?php echo $this->lang->line('address'); ?></label>
                                                        <textarea class="form-control" name="text" id="text" placeholder="<?php echo $this->lang->line('address'); ?>" cols="30" rows="12"><?php echo $address->text; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-3 mb-2">
                                                <button type="submit" class="btn btn-theme rounded-4 p-2">
                                                    <?php echo $this->lang->line('save'); ?>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>