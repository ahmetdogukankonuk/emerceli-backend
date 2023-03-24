<?php

function convertToUsername($text)
{

    $turkce = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}", "/");
    $convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

    return strtolower(str_replace($turkce, $convert, $text));

}

function get_active_user(){

    $t = &get_instance();

    $user = $t->session->userdata("user");

    if($user)
        return $user;
    else
        return false;

}

function get_product_cover_image($product_id){

    $t = &get_instance();

    $t->load->model("product_image_model");

    $cover_image = $t->product_image_model->get(
        array(
            "isCover"       => 1,
            "productID"    => $product_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->product_image_model->get(
            array(
                "productID"    => $product_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->imgUrl : "";

}

function get_special_product_cover_image($product_id){

    $t = &get_instance();

    $t->load->model("special_product_image_model");

    $cover_image = $t->special_product_image_model->get(
        array(
            "isCover"       => 1,
            "productID"    => $product_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->special_product_image_model->get(
            array(
                "productID"    => $product_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->imgUrl : "";

}

function get_product_title($product_id = 0){

    $t = &get_instance();

    $t->load->model("product_model");

    $product = $t->product_model->get(
        array(
            "id"    => $product_id
        )
    );

    if($product)
        return $product->title;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}

function get_order_cover_image($order_id){

    $t = &get_instance();

    $t->load->model("orders_image_model");

    $cover_image = $t->orders_image_model->get(
        array(
            "isCover"       => 1,
            "order_id"            => $order_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->orders_image_model->get(
            array(
                "order_id"        => $order_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}

function get_readable_date($date){
    setlocale(LC_ALL, 'tr_TR.UTF-8');
    return strftime('%e %B %Y', strtotime($date));
}

function get_portfolio_category_title($id){

    $t = &get_instance();

    $t->load->model("portfolio_category_model");

    $portfolio = $t->portfolio_category_model->get(
        array(
            "id"    => $id

        )
    );

    return (empty($portfolio)) ? false : $portfolio->title;


}

function get_portfolio_cover_image($id){

    $t = &get_instance();

    $t->load->model("portfolio_image_model");

    $cover_image = $t->portfolio_image_model->get(
        array(
            "isCover"       => 1,
            "portfolio_id"    => $id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->portfolio_image_model->get(
            array(
                "portfolio_id"    => $id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}

function get_social(){

    $t = &get_instance();

    $t->load->model("social_model");

    $social = $t->social_model->get();

    $t->session->set_userdata("social", $social);

    return $social;
}

function get_address(){

    $t = &get_instance();

    $t->load->model("address_model");

    $address = $t->address_model->get();

    $t->session->set_userdata("address", $address);

    return $address;
}

function send_email($toEmail = "", $subject = "", $message = ""){

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

    $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => "\r\n"
    );

    $t->load->library("email", $config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();

}


function get_user_role($user_role_id = 0){

    $t = &get_instance();

    $t->load->model("user_role_model");

    $user_role = $t->user_role_model->get(
        array(
            "id"    => $user_role_id
        )
    );

    if($user_role)
        return $user_role->title;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}


function get_user_name($user_id = 0){

    $t = &get_instance();

    $t->load->model("user_model");

    $user_name = $t->user_model->get(
        array(
            "id"    => $user_id
        )
    );

    if($user_name)
        return $user_name->user_name;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}

function get_user_about($user_id = 0){

    $t = &get_instance();

    $t->load->model("user_model");

    $user_about = $t->user_model->get(
        array(
            "id"    => $user_id
        )
    );

    if($user_about)
        return $user_about->about;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}

function get_user_photo($user_id = 0){

    $t = &get_instance();

    $t->load->model("user_model");

    $user_id = $t->user_model->get(
        array(
            "id"    => $user_id
        )
    );

    if($user_id)
        return $user_id->img_url;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}