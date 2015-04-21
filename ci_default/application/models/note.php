<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model 
{
	public function all()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}

	public function create($note)
	{
		$query = "INSERT INTO notes (title, description, created_at, updated_at)
				 VALUES (?, '', NOW(), NOW())";
		$values = array($note['title']);
		return $this->db->query($query, $values);
	}

	public function destroy($id)
	{
		$query = "DELETE FROM notes WHERE id = ?";
		return $this->db->query($query, $id);
	}
}
