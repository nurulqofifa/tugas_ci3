<?php
class Category_model extends CI_Model{

	public function get_category(){
		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get_single($id)
	{
		$query = $this->db->query('select * from categories where id_cat='.$id);
		return $query->result();
	}

	public function create_category()
   	{
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );
       return $this->db->insert('categories', $data);
   }

   public function update($id){
			$data = array(
				'cat_name' => $this->input->post('cat_name'),
				'cat_description' => $this->input->post('deskripsi')
			);
		$this->db->where('id_cat',$id);
		$this->db->update('categories', $data);
	}

	public function Hapus($id){
		$query = $this->db->query('DELETE from categories where id_cat = '.$id);
	}

	

}