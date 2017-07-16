<?php 

	class RecipeModel extends MY_Model
	{
		private $recipe_name;
		private $recipe_photo;
		private $description;
		private $ingredients;
		private $preparation_time;
		private $date_added;
		private $active;
		
		function __construct()
		{
			parent::__construct();
		}


		public function getRecipes(){
			$this->db->select('*');
			$this->db->from('recipe');
			$this->db->where('active', 1);
			$this->db->limit(20);

			return $this->db->get()->result_object();
		}

		public function getRecipesByCategory(){
			$category_id = isset($_GET['cat']) && $_GET['cat'] !="" ? $_GET['cat'] : "";

			$this->db->select('*');
			$this->db->from('recipe a');
			$this->db->where('a.active', 1);
			if ($category_id) {
				$this->db->where('a.category_id', $category_id);
			}
			$this->db->join('categories b', 'b.ID = a.category_id', 'left');
			$this->db->limit(20);

			return $this->db->get()->result_object();
		}

	}




















 ?>