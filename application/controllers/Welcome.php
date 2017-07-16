<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('site/categoryModel');
		$this->load->model('site/recipeModel');
	}

	public function index(){	
		$Ncategory = $this->categoryModel->getInstance();
		$Nrecipe = $this->recipeModel->getInstance();
		$data['categories'] = $Ncategory->getCategories();
		$data['recipes'] = $Nrecipe->getRecipesByCategory();

		$data['content'] = $this->load->view('site/home.php', $data, true);
		$this->load->view('site/header.php', $data);
	}
}
