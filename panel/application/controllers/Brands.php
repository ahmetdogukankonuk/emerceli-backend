<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends MY_Controller {

    public $viewFolder = "";

    public function __construct(){

        parent::__construct();

        $this->viewFolder = "brands_v";

        $this->load->model("brands_model");

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

        $items = $this->brands_model->get_brands(
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
            redirect(base_url("brands"));
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }


    public function add_brand(){
        
        /* Here we check if the user logged in is allowed to add new record to this module, if not we send them back */
        if(!isAllowedWriteModule()){
            redirect(base_url("brands"));
        }

        $this->load->library("form_validation");
        $this->load->helper("tools");

        if($_FILES["imgUrl"]["name"] == ""){

            $alert = array(
                "title" => $this->lang->line('operation-is-unsuccesfull-message'),
                "text"  => $this->lang->line('please-select-an-image'),
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("brands/new"));

            die();
        }
        
        $this->form_validation->set_rules("title", "Brand Name English", "required|trim");

        $validate = $this->form_validation->run();

        if($validate){

            $file_name = md5(uniqid(mt_rand(), true)) . "." . pathinfo($_FILES["imgUrl"]["name"], PATHINFO_EXTENSION);

            $config["allowed_types"] = "jpg|jpeg|png|webp";
            $config["upload_path"]   = "uploads/$this->viewFolder/";
            $config["file_name"] = $file_name;

            $this->load->library("upload", $config);

            $upload = $this->upload->do_upload("imgUrl");

            if($upload){

                $uploaded_file = $this->upload->data("file_name");

                $insert = $this->brands_model->add(
                    array(
                        "title"                 => $this->input->post("title"),
                        "title_tr"              => $this->input->post("title_tr"),
                        "title_fr"              => $this->input->post("title_fr"),
                        "title_es"              => $this->input->post("title_es"),
                        "imgUrl"                => $uploaded_file,
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

            } else {

                $alert = array(
                    "title" => $this->lang->line('operation-is-unsuccesfull-message'),
                    "text" => $this->lang->line('record-could-not-added-text'),
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("brands/new"));

                die();

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("brands"));

        } else {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

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
            redirect(base_url("brands"));
        }

        $viewData = new stdClass();

        $item = $this->brands_model->get(
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
    public function update_product_brand($id){

        /* Here we check if the user logged in is allowed to update the module, if not we dont give permisson to update this record */
        if(!isAllowedUpdateModule()){
            redirect(base_url("brands"));
        }

        $this->load->library("form_validation");
        $this->load->helper("tools");
        
        $this->form_validation->set_rules("title", "Brand Name English", "required|trim");
        
        $validate = $this->form_validation->run();

        if($validate){

            if($_FILES["imgUrl"]["name"] !== "") {

                $file_name = md5(uniqid(mt_rand(), true)) . "." . pathinfo($_FILES["imgUrl"]["name"], PATHINFO_EXTENSION);

                $config["allowed_types"] = "jpg|jpeg|png|webp";
                $config["upload_path"] = "uploads/$this->viewFolder/";
                $config["file_name"] = $file_name;

                $this->load->library("upload", $config);

                $upload = $this->upload->do_upload("imgUrl");

                if ($upload) {

                    $uploaded_file = $this->upload->data("file_name");

                    $data = array(
                        "title"                 => $this->input->post("title"),
                        "title_tr"              => $this->input->post("title_tr"),
                        "title_fr"              => $this->input->post("title_fr"),
                        "title_es"              => $this->input->post("title_es"),
                        "imgUrl"                => $uploaded_file,
                        "updatedAt"             => date("Y-m-d H:i:s")
                    );

                } else {

                    $alert = array(
                        "title" => $this->lang->line('operation-is-unsuccesfull-message'),
                        "text" => $this->lang->line('record-could-not-added-text'),
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("categories/update/$id"));

                    die();

                }

            } else {

                $data = array(
                    "title"                 => $this->input->post("title"),
                    "title_tr"              => $this->input->post("title_tr"),
                    "title_fr"              => $this->input->post("title_fr"),
                    "title_es"              => $this->input->post("title_es"),
                    "updatedAt"             => date("Y-m-d H:i:s")
                );

            }

            $update = $this->brands_model->update(array("id" => $id), $data);

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

            redirect(base_url("brands"));

        } else {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            $viewData->item = $this->brands_model->get(
                array(
                    "id"    => $id,
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

            $this->brands_model->update(
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
            redirect(base_url("brands"));
            exit();
        }
    
        $fileName = $this->brands_model->get(array("id" => $id));
    
        if (!$fileName) {
            redirect(base_url("brands"));
            exit();
        }
    
        $delete = $this->brands_model->delete(array("id" => $id));
    
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
    
        redirect(base_url("brands"));
    }
    
}