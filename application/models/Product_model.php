<?php
class Product_model extends CI_Model {
	/*
	* Get All Products
	*/
	public function get_products(){
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	/*
	* Get Single Products
	*/
	public function get_product_details($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
		
	}
	/*
	* Get Categories
	*/
	public function get_categories(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
	* Get popular
	*/
	public function get_popular(){
		$this->db->select('p.*, COUNT(o.product_id) as total');
		$this->db->from('orders as o');
		$this->db->join('products AS p', 'o.product_id = p.id', 'INNER');
		$this->db->group_by('o.product_id');
		$this->db->order_by('total','desc');
		
		$query = $this->db->get();
		return $query->result();
	}
	/*
	* Get Single Products
	*/
	public function get_product_details_of_category($cat_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('category_id', $cat_id);
		$query = $this->db->get();
		return $query->result();
		
	}
}