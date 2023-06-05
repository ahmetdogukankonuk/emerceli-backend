<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_categories extends MY_Controller {

    public $viewFolder = "";

    public function __construct(){

        parent::__construct();

        $this->viewFolder = "product_categories_v";

        $this->load->model("product_categories_model");

    }

    /* Index function is the index page of the URL request */
    public function index(){
        
        /* Here we check if there is a user logged in or not, if not we send them to login page */
        if(!get_active_user()){
            redirect(base_url("login"));
        }

        /* Here we check if the user logged in is allowed to see this module, if not we send them to base url */
        if(!isAllowedViewModule()){
            redirect(base_url());
        }
        
	    $viewData = new stdClass();

        $items = $this->product_categories_model->get_categories(
            array(), "rank ASC"
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        
	}

    /* New Record Page */
    public function new_form(){

        /* Here we check if there is a user logged in or not, if not we send them to login page */
        if(!get_active_user()){
            redirect(base_url("login"));
        }
        
        /* Here we check if the user logged in is allowed to add new record to this module, if not we send them back */
        if(!isAllowedWriteModule()){
            redirect(base_url("product-categories"));
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }


    public function add_product_categories(){

        /* Here we check if the user logged in is allowed to add new record to this module, if not we send them back */
        if(!isAllowedWriteModule()){
            redirect(base_url("categories"));
        }

        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Category Name English", "required|trim");
        
        $validate = $this->form_validation->run();

        if($validate){

            $insert = $this->product_categories_model->add(
                array(
                    "title"                 => $this->input->post("title"),
                    "title_tr"              => $this->input->post("title_tr"),
                    "title_fr"              => $this->input->post("title_fr"),
                    "title_es"              => $this->input->post("title_es"),
                    "title_ar"              => $this->input->post("title_ar"),
                    "title_ru"              => $this->input->post("title_ru"),
                    "title_de"              => $this->input->post("title_de"),
                    "title_pt"              => $this->input->post("title_pt"),
                    "title_fa"              => $this->input->post("title_fa"),
                    "title_ch"              => $this->input->post("title_ch"),
                    "rank"                  => 0,
                    "isActive"              => 1,
                    "createdAt"             => date("Y-m-d H:i:s"),
                    "updatedAt"             => date("Y-m-d H:i:s")
                )
            );

            if($insert){

                $alert = array(
                    "title" => $this->lang->line('operation-is-succesfull-message'),
                    "text" => $this->lang->line('record-added-text'),
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => $this->lang->line('operation-is-unsuccesfull-message'),
                    "text" => $this->lang->line('record-could-not-added-text'),
                    "type"  => "error"
                );
                
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("categories"));

        } else {

            $viewData = new stdClass();
            $viewData->viewFolder       = $this->viewFolder;
            $viewData->subViewFolder    = "add";
            $viewData->form_error       = true;

            $viewData->product_categories = $this->product_categories_model->get_all(
                array(
                    "isActive"  => 1
                )
            );    

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            
        }

    }

    /* Update Record Page */
    public function update_form($id){
        
        /* Here we check if there is a user logged in or not, if not we send them to login page */
        if(!get_active_user()){
            redirect(base_url("login"));
        }

        /* Here we check if the user logged in is allowed to update the module, if not we dont give permisson to update this record */
        if(!isAllowedUpdateModule()){
            redirect(base_url("product-categories"));
        }

        $viewData = new stdClass();

        $item = $this->product_categories_model->get(
            array(
                "id"    => $id,
            )
        );
        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    /* Here we update the specific record by id */
    public function update_product_category($id){

        /* Here we check if the user logged in is allowed to update the module, if not we dont give permisson to update this record */
        if(!isAllowedUpdateModule()){
            redirect(base_url("categories"));
        }

        $this->load->library("form_validation");
        
        $this->form_validation->set_rules("title", "Category Name English", "required|trim");

        $validate = $this->form_validation->run();

        if($validate){

            $update = $this->product_categories_model->update(
                array(
                        "id" => $id
                ),
                array(
                    "title"                 => $this->input->post("title"),
                    "title_tr"              => $this->input->post("title_tr"),
                    "title_fr"              => $this->input->post("title_fr"),
                    "title_es"              => $this->input->post("title_es"),
                    "title_ar"              => $this->input->post("title_ar"),
                    "title_ru"              => $this->input->post("title_ru"),
                    "title_de"              => $this->input->post("title_de"),
                    "title_pt"              => $this->input->post("title_pt"),
                    "title_fa"              => $this->input->post("title_fa"),
                    "title_ch"              => $this->input->post("title_ch"),
                    "updatedAt"             => date("Y-m-d H:i:s")
                )
            );

            if($update){

                $alert = array(
                    "title" => $this->lang->line('operation-is-succesfull-message'),
                    "text"  => $this->lang->line('record-updated-text'),
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => $this->lang->line('operation-is-unsuccesfull-message'),
                    "text"  => $this->lang->line('record-could-not-updated-text'),
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("categories"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            
            $viewData->item = $this->product_categories_model->get(
                array(
                    "id"    => $id,
                )
            );

            $viewData->product_categories = $this->product_categories_model->get_all(
                array(
                    "isActive"  => 1
                )
            );    

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    /* Activity Setter */
    public function isActiveSetter($id){

        /* Here we check if the user logged in is allowed to update the module, if not we dont give permisson to update this record */
        if(!isAllowedUpdateModule()){
            die();
        }
        
        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->product_categories_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }

    }

    /* Deleting specific record by its id */
    public function delete($id) {
        /* Here we check if the user logged in is allowed to delete the module, if not we don't give permission to delete this record */
        if (!isAllowedDeleteModule()) {
            redirect(base_url("product-categories"));
            exit();
        }
    
        $fileName = $this->product_categories_model->get(array("id" => $id));
    
        if (!$fileName) {
            redirect(base_url("categories"));
            exit();
        }
    
        $delete = $this->product_categories_model->delete(array("id" => $id));
    
        if ($delete) {
            if (file_exists("uploads/{$this->viewFolder}/{$fileName->imgUrl}")) {
                if (unlink("uploads/{$this->viewFolder}/{$fileName->imgUrl}")) {
                    $this->session->set_flashdata('success', 'Record deleted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Image deletion failed.');
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Record deletion failed.');
        }
    
        redirect(base_url("categories"));
    }
    
}
