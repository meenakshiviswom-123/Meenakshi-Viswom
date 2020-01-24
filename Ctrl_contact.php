<?php
class Ctrl_contact extends CI_Controller
{
	public function __construct()
	{
			parent::__construct();
			$this->load->model('Mdl_contact');
			$this->load->helper('url');
			//This is the helper file used to load url related built in functions		
			//This is the constructor function in codeigniter
	}
	public function index()
	{
		$data['contacts']=$this->Mdl_contact->select_ctnt();	
		$this->load->view('home',$data);
	}
	public function  insert_contact()
	{
		$name=$_REQUEST['txtName'];
		$email=$_REQUEST['txtEmail'];
		$mobile=$_REQUEST['txtMobile'];
		//echo $name." ".$email." ".$mobile;
		$d=array('name'=>$name,'email'=>$email,'mobile'=>$mobile);
		$this->Mdl_contact->insert_ctnt($d);
		redirect('Ctrl_contact/index');//this funtion used to load the main page after operation
	}
	public function delete_contact($id)
	{
			$this->Mdl_contact->delete_ctnt($id);
			redirect('Ctrl_contact/index');
	}
	public function edit_contact($id)
	{
			$data['contact']=$this->Mdl_contact->select_spec_contact($id);
			$this->load->view('edit_contact',$data);
			
	}
	public function update_contact()
	{
		$name=$_REQUEST['txtName'];
		$email=$_REQUEST['txtEmail'];
		$mobile=$_REQUEST['txtMobile'];
		$id=$_REQUEST['txtId'];
		//echo $name." ".$email." ".$mobile;
		$d=array('name'=>$name,'email'=>$email,'mobile'=>$mobile);
		$this->Mdl_contact->update_ctnt($id,$d);
		//echo "Contact Updater";
		redirect('Ctrl_contact/index');
	}
	
}
?>