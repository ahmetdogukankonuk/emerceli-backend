        <div class="px-4 page-title title-color">
            <h3> <?php echo $this->lang->line('new-product'); ?> </h3>
        </div>

        <section class="mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 rounded-4 shadow py-5 card-bg">
                            <div class="px-xl-5 px-4">
                                <form action="<?php echo base_url("products/add_product"); ?>" method="post" enctype="multipart/form-data">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryID" class="form-label text-color"><?php echo $this->lang->line('category'); ?></label>
                                                <select class="form-select" name="categoryID" id="categoryID"  aria-label="Default select example">
                                                    <option selected><?php echo $this->lang->line('select-a-category'); ?></option>
                                                    <?php foreach($product_categories as $product_categories) { ?>
                                                        <option value="<?php echo $product_categories->id; ?>"><?php echo $product_categories->title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="brandID" class="form-label text-color"><?php echo $this->lang->line('brands'); ?></label>
                                                <select class="form-select" name="brandID" id="brandID"  aria-label="Default select example">
                                                    <option selected> Select a Brand </option>
                                                    <?php foreach($brands as $brands) { ?>
                                                        <option value="<?php echo $brands->id; ?>"><?php echo $brands->title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="model" class="form-label text-color"> Model </label>
                                                <input type="text" class="form-control" name="model" id="model" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="oemNo" class="form-label text-color"> OEM No </label>
                                                <input type="text" class="form-control" name="oemNo" id="oemNo" placeholder="OEM No ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('english'); ?>)</label>
                                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('english'); ?>)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_tr" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('turkish'); ?>)</label>
                                                <input type="text" class="form-control" name="title_tr" id="title_tr" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('turkish'); ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_fr" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('french'); ?>)</label>
                                                <input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('french'); ?>)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_es" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('spanish'); ?>)</label>
                                                <input type="text" class="form-control" name="title_es" id="title_es" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('spanish'); ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ar" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('arabian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ar" id="title_ar" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('arabian'); ?>)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ru" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('russian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ru" id="title_ru" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('russian'); ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_de" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('german'); ?>)</label>
                                                <input type="text" class="form-control" name="title_de" id="title_de" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('german'); ?>)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_pt" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('portuguese'); ?>)</label>
                                                <input type="text" class="form-control" name="title_pt" id="title_pt" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('portuguese'); ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_fa" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('persian'); ?>)</label>
                                                <input type="text" class="form-control" name="title_fa" id="title_fa" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('persian'); ?>)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title_ch" class="form-label text-color"><?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('chinese'); ?>)</label>
                                                <input type="text" class="form-control" name="title_ch" id="title_ch" placeholder="<?php echo $this->lang->line('title'); ?> (<?php echo $this->lang->line('chinese'); ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('english'); ?>)</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('english'); ?>)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_tr" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('turkish'); ?>)</label>
                                                <textarea class="form-control" name="description_tr" id="description_tr" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('turkish'); ?>)"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_fr" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('french'); ?>)</label>
                                                <textarea class="form-control" name="description_fr" id="description_fr" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('french'); ?>)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_es" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('spanish'); ?>)</label>
                                                <textarea class="form-control" name="description_es" id="description_es" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('spanish'); ?>)"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_ar" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('arabian'); ?>)</label>
                                                <textarea class="form-control" name="description_ar" id="description_ar" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('arabian'); ?>)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_ru" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('russian'); ?>)</label>
                                                <textarea class="form-control" name="description_ru" id="description_ru" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('russian'); ?>)"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_de" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('german'); ?>)</label>
                                                <textarea class="form-control" name="description_de" id="description_de" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('german'); ?>)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_pt" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('portuguese'); ?>)</label>
                                                <textarea class="form-control" name="description_pt" id="description_pt" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('portuguese'); ?>)"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_fa" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('persian'); ?>)</label>
                                                <textarea class="form-control" name="description_fa" id="description_fa" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('persian'); ?>)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description_ch" class="form-label text-color"><?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('chinese'); ?>)</label>
                                                <textarea class="form-control" name="description_ch" id="description_ch" cols="30" rows="10" placeholder="<?php echo $this->lang->line('description'); ?> (<?php echo $this->lang->line('chinese'); ?>)"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid mt-3">
                                        <button type="submit" class="btn btn-theme rounded-4 p-2">
                                            <?php echo $this->lang->line('save'); ?>
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