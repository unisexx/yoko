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
		
		// Set lang
		$this->lang->load('admin');
        
        // Set js
        $this->template->append_metadata(js_notify());
		
		// Set Keywords , Description
        $this->template->append_metadata( meta('description','ประยงด์ปาร์เก้ รับทำ ไม้พื้นปาร์เก้ ไม้พื้นลามิเนต รับเมหาและตกแต่ง งานก่อสร้าง ปูพื้นปาร์เก้ และซ่อมแซมส่วนภายในบ้านและอาคาร ติดตั้ง อุปกรณ์ ครุภัณฑ์ ภายในบ้านและตกแต่ง ราคาถูก'));
        $this->template->append_metadata( meta('keywords','ปาร์เก้,ทำปาร์เก้,ไม้ปาร์เก้,พื้นปาร์เก้,ไม้พื้นปาร์เก้,ปูพื้นปาร์เก้,ประยงด์ปาร์เก้,ไม้พื้นลามิเนต,รับเหมาและตกแต่ง,งานก่อสร้าง,ราคาถูก'));
	}
}
?>