<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function switchLanguage($dil){
        $this->session->set_userdata('lang',$dil);
        redirect($_SERVER['HTTP_REFERER']);
    }
    
	public function index(){
        
        $viewData = new stdClass();
        $viewData->viewFolder = "home_v";
        $this->load->model("product_model");
        $this->load->model("references_model");
        $this->load->model("about_model");
        $this->load->model("mission_model");

        $viewData->about = $this->about_model->get();

        $viewData->mission = $this->mission_model->get();

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive"  => 1,
                "isOnMain"  => 1,
            ), "rank ASC"
        );

        $viewData->references = $this->references_model->get_all(
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

        $this->load->helper("tools");
        $this->load->model("product_model");
        $this->load->model("product_category_model");
        $this->load->model("product_image_model");
        $this->load->model("brands_model");

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        
        $viewData->product_categories = $this->product_category_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $viewData->brands = $this->brands_model->get_all(
            array(
                "isActive"  => 1,
            ), "rank ASC"
        );
        
        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function product_list_by_category($id){

        if($id != ""){
            
            $viewData = new stdClass();
            $viewData->viewFolder = "product_list_v";

            $this->load->helper("tools");
            $this->load->model("product_model");
            $this->load->model("product_category_model");
            $this->load->model("product_image_model");
            $this->load->model("brands_model");

            $viewData->products = $this->product_model->get_all(
                array(
                    "isActive"          => 1,
                    "categoryID"       => $id,
                ), "id ASC"
            );

    
            $viewData->product_categories = $this->product_category_model->get_all(
                array(
                    "isActive"  => 1
                ), "rank ASC"
            );

            $viewData->brands = $this->brands_model->get_all(
                array(
                    "isActive"  => 1,
                ), "rank ASC"
            );

            $this->load->view($viewData->viewFolder, $viewData);

        } else {

        }
        
    }

    public function product_list_by_brand($id){

        if($id != ""){
            
            $viewData = new stdClass();
            $viewData->viewFolder = "product_list_v";

            $this->load->helper("tools");
            $this->load->model("product_model");
            $this->load->model("product_category_model");
            $this->load->model("product_image_model");
            $this->load->model("brands_model");

            $viewData->products = $this->product_model->get_all(
                array(
                    "isActive"          => 1,
                    "brandID"           => $id,
                ), "id ASC"
            );

    
            $viewData->product_categories = $this->product_category_model->get_all(
                array(
                    "isActive"  => 1
                ), "rank ASC"
            );

            $viewData->brands = $this->brands_model->get_all(
                array(
                    "isActive"  => 1,
                ), "rank ASC"
            );

            $this->load->view($viewData->viewFolder, $viewData);

        } else {

        }
        
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
        
        $current_product = $viewData->product;
        $categoryID = $current_product->categoryID;

        $viewData->other_products = $this->product_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $current_product->id,
                "categoryID" => $categoryID
            ),"rand()",
            array("start" => 0, "count" => 3)
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
        $this->load->model("references_model");

        $viewData->about = $this->about_model->get();

        $viewData->references = $this->references_model->get_all(
            array(
                "isActive"  => 1,
            ), "rank ASC"
        );

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
