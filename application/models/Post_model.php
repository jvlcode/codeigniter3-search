<?php
	class Post_model extends CI_Model{
		
		public function searchPosts($query){
			return $this->db->like('title',$query)->or_like('description',$query)->get('posts')->result();
		}
	}
