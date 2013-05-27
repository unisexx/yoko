<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// check lang
		$this->template->title('ประยงด์ปาร์เก้ รับทำ ไม้พื้นปาร์เก้ ไม้พื้นลามิเนต ราคาถูก');
		$this->template->set_theme('yoko');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
	}
}
?>