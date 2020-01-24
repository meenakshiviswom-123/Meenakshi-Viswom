<?php
class Mdl_contact extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();//Here i load the database globally
	}
	public function insert_ctnt($data)
	{
			$this->db->insert('contact',$data);//Here i used native function for insertion
			//u can also use $this-db->query() as we discussed earlier
	}
	public function delete_ctnt($id)
	{
		$this->db->where('cid',$id);
		$this->db->delete('contact');
	}
	public function update_ctnt($id,$data)
	{
			$this->db->where('cid',$id);
			$this->db->update('contact',$data);
	}
	public function select_ctnt()
	{
		$res=$this->db->get('contact');//This will select all data from table
		return $res->result_array();
	}
	public function select_spec_contact($id)
	{
			$res=$this->db->get_where("contact",array('cid'=>$id));
			return $res->row_array();
	}
	
}
?>