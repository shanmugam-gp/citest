<?php 

class Crud extends CI_Controller
{
  
	public function index()
	{
	  $this->load->view('index');
	}
	
	public function hello()
	{
	  echo "works good";
	}
}
