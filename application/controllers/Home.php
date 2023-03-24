<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
        
        $viewData = new stdClass();
        $viewData->viewFolder = "home_v";
        $this->load->model("product_model");
        $this->load->model("sliders_model");
        $this->load->model("about_model");
        $this->load->model("mission_model");

        $viewData->about = $this->about_model->get();

        $viewData->mission = $this->mission_model->get();

        $viewData->sliders = $this->sliders_model->get_all(
            array(
                "isActive"  => 1,
            ), "rank ASC"
        );

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive"  => 1,
                "isOnMain"  => 1,
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function product_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";

        $this->load->model("product_model");

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function special_product_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "special_product_list_v";

        $this->load->model("special_product_model");

        $viewData->special_products = $this->special_product_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function special_product_detail($id = ""){

        $viewData = new stdClass();
        $viewData->viewFolder = "special_product_v";

        $this->load->model("special_product_model");
        $this->load->model("special_product_image_model");
        $this->load->model("social_model");

        $viewData->special_product = $this->special_product_model->get(
            array(
                "isActive"  => 1,
                "id"        => $id
            )
        );

        $viewData->special_product_images = $this->special_product_image_model->get_all(
            array(
                "isActive"      => 1,
                "isCover"       => 0,
                "productID"     => $viewData->special_product->id,
            ), "rank ASC"
        );

        $viewData->social = $this->social_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function product_detail($id = ""){

        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";

        $this->load->model("product_model");
        $this->load->model("product_image_model");
        $this->load->model("social_model");

        $viewData->product = $this->product_model->get(
            array(
                "isActive"  => 1,
                "id"        => $id
            )
        );
        $viewData->product_images = $this->product_image_model->get_all(
            array(
                "isActive"      => 1,
                "isCover"       => 0,
                "productID"     => $viewData->product->id,
            ), "rank ASC"
        );

        $viewData->social = $this->social_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function video_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "videos_list_v";

        $this->load->model("videos_model");

        $viewData->videos = $this->videos_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function video_detail($id = ""){

        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";

        $this->load->model("videos_model");

        $viewData->video = $this->videos_model->get(
            array(
                "isActive"  => 1,
                "id"        => $id
            )
        );
        
        $this->load->view($viewData->viewFolder, $viewData);

    }
    
    public function about(){

        $viewData = new stdClass();
        $viewData->viewFolder = "about_v";
        $this->load->model("about_model");

        $viewData->about = $this->about_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }


    public function contact(){
        
        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";
        $this->load->model("social_model");

        $viewData->social = $this->social_model->get();
        $this->load->view($viewData->viewFolder, $viewData);

    }
}
