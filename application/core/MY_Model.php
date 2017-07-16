<?php 

	class My_Model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function getInstance(){
			return new $this;
		}

		

	}














 ?>