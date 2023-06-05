<?php

class Product_model extends CI_Model
{

    public $tableName = "products";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    
    public function get_allx($where = array(), $order = "id ASC", $limit = array("count" => 0, "start" => 0))
    {

        $this->db->where($where)->order_by($order);

        if(!empty($limit))
            $this->db->limit($limit["count"], $limit["start"]);

        return $this->db->get($this->tableName)->result();
    }
    
    /* Getting the records in products */
    public function get_products() {
        $this->db->select('id, oemNo, brandID, title, isOnMain, isActive');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function get_all($where = array(), $order = "id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

    public function get_count($where = array())
    {
        $this->db->where($where);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    /* Search Quaries */


    public function set($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }


    public function settr($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_tr", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setfr($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_fr", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setde($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_de", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setes($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_es", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setar($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_ar", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setru($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_ru", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setfa($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_fa", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setpt($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_pt", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }

    public function setch($key, $where = array()){
        $this->db->select("*");
        $this->db->where("isActive", 1);
        $this->db->like("oemNo", $key);
        $this->db->or_like("id", $key);
        $this->db->or_like("title_ch", $key);
        
        if (!empty($where)) {
            $this->db->where($where);
        }
    
        $query = $this->db->get($this->tableName);
    
        if ($query) {
            return $query->result();
        } else {
            // handle error
            return false;
        }
    }
}