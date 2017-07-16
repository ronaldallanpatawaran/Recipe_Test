<?php 

	class CategoryModel extends MY_Model
	{
		private $ID;
		private $category_name;
		private $category_description;
		private $active;
		
		public function __construct(){
			parent::__construct();
		}

		public function setCategoryName($input){
			$this->category_name = $input;
		}

		public function setCategoryDescription($input){
			$this->category_description = $input;
		}

		public function getCategoryName(){
			return $this->category_name;
		}

		public function getCategoryDescription(){
			return $this->category_description;
		}

		public function getActive(){
			return $this->active;
		}

		public function setactive($input){
			$this->active = $input;
		}

		public function getCategories(){
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->where('active', 1);

			return $this->db->get()->result_object();
		}

		public function getCategory($category_id){
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->where('active', 1);
			$this->db->where('ID', $category_id);

			return $this->db->get()->result_object();
		}
	}

























 ?>