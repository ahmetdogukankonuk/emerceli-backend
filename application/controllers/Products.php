<?php

class Products extends MY_Controller {
    
    public $viewFolder = "search_product_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function search() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->set($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchtr() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->settr($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }
    
    public function searchfr() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setfr($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchde() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setde($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searches() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setes($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchar() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setar($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchru() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setru($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchfa() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setfa($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchpt() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setpt($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }

    public function searchch() {
        $key = $this->input->post("key", true);
        $data["store"] = $this->product_model->setch($key, array("isActive" => 1));
    
        $this->load->model("product_category_model");
        $data["product_categories"] = $this->product_category_model->get_all(
            array("isActive" => 1), "rank ASC"
        );
    
        $this->load->view("search_product_v", $data);
    }
    
    public function categories(){

        $this->load->model("product_categories_model");
        
        $this->load->library("pagination");

        $config["base_url"] = base_url("products/categories");
        $config["total_rows"] = $this->product_categories_model->get_count();
        $config["uri_segment"] = 3;
        $config["per_page"] = 6;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $viewData = new stdClass();
        $viewData->viewFolder = "categories_list_v";

        $viewData->product_categories = $this->product_categories_model->get_records($config["per_page"],$page
        ,array(
            "isActive"  => 1
        ));
        $viewData->links = $this->pagination->create_links();

        $this->load->view($viewData->viewFolder, $viewData);

    }
    
}