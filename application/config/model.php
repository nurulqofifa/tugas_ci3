<?php 
class Blog_model extends CI_model{
	public $nama;
	public $nim;
	public $alamat;

	public function get_last_ten_enttries()
	{
		$query = $this-> db->get('entries', 10);
		return $query-result();
	}

	public function insert_entry()
	{
		$this->nama 	= $_POST['nama'];
		$this->nim 		= $_POST['nim'];
		$this->alamat 	= $_POST['alamat'];
		
		$this->db->insert('entries', $this);
		
	}

	public function update_entry()
	{
		$this->nama 	= $_POST['nama'];
		$this->nim 		= $_POST['nim'];
		$this->alamat 	= $_POST['alamat'];
		
		$this->db->update('entries', $this, array('id', => $_POST['id']));
		
	}
}
?>