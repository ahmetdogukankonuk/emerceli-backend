        <div class="px-4 page-title title-color">
            <h3><?php echo $this->lang->line('update-category'); ?></h3>
        </div>

        <section class="mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 rounded-4 shadow py-5 card-bg">
                            <div class="px-xl-5 px-4">
                                <form action="<?php echo base_url("product_categories/update_product_category/$item->id"); ?>" method="post" enctype="multipart/form-data">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('english'); ?>)</label>
                                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('english'); ?>)" value="<?php echo $item->title; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_tr" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('turkish'); ?>)</label>
                                                <input type="text" class="form-control" name="title_tr" id="title_tr" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('turkish'); ?>)" value="<?php echo $item->title_tr; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_fr" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('french'); ?>)</label>
                                                <input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('french'); ?>)" value="<?php echo $item->title_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_es" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('spanish'); ?>)</label>
                                                <input type="text" class="form-control" name="title_es" id="title_es" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('spanish'); ?>)" value="<?php echo $item->title_es; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ar" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('arabian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ar" id="title_ar" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('arabian'); ?>)" value="<?php echo $item->title_ar; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ru" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('russian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ru" id="title_ru" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('russian'); ?>)" value="<?php echo $item->title_ru; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_de" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('german'); ?>)</label>
                                                <input type="text" class="form-control" name="title_de" id="title_de" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('german'); ?>)" value="<?php echo $item->title_de; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_pt" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('portuguese'); ?>)</label>
                                                <input type="text" class="form-control" name="title_pt" id="title_pt" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('portuguese'); ?>)" value="<?php echo $item->title_pt; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_fa" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('persian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_fa" id="title_fa" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('persian'); ?>)" value="<?php echo $item->title_fa; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ch" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('chinese'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ch" id="title_ch" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('chinese'); ?>)" value="<?php echo $item->title_ch; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid mt-3">
                                        <button type="submit" class="btn btn-theme rounded-4 p-2">
                                            <?php echo $this->lang->line('update'); ?>
                                        </button>
                                    </div>
                                    <div class="d-grid mt-2">
                                        <button type="submit" class="btn btn-outline-primary rounded-4 p-2">
                                            <?php echo $this->lang->line('cancel'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>