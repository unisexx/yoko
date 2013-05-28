<?php
	Class Weblinks extends Public_Controller
	{
		function __construct()
		{
			parent::__construct();
		}	
		
		function inc_home(){
			$data['weblinks'] = new Weblink();
			$data['weblinks']->order_by('id','desc')->get();
			$this->load->view('inc_home',$data);
		}
	}
	
?>