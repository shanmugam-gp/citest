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
	
	public function world()
	{
		echo "again testing";
	}
       
        public function helloworld()
	{
	  $this->hello()." ".$this->world();
	}

	
}
