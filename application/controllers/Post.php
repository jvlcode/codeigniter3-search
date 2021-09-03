<?php 

	class Post extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function index(){
		$this->load->view('search',array('query'=>null));
		}

		public function search(){
			$query = $this->input->get('query');
			$this->load->database();
			$this->load->model('post_model');
			$posts = $this->post_model->searchPosts($query);
			$this->load->view('search',array('posts'=>$posts,'query'=>$query));
		}
	}
