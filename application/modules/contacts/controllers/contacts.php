<?php
class Contacts extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
	    $data['address'] = new Address(1);
		$this->template->build('contacts_index',$data);
	}
    
    function save(){
        if($_POST){
        	$captcha = $this->session->userdata('captcha');
			if(($_POST['captcha'] == $captcha) && !empty($captcha)){
				$contact = new Contact();
	            $contact->from_array($_POST);
	            $contact->save();
	            set_notify('success', 'ส่งข้อความเรียบร้อยแล้วค่ะ');
			}else{
				set_notify('error','กรอกรหัสไม่ถูกต้อง');
				redirect($_SERVER['HTTP_REFERER']);
			}
        }
        redirect('contacts');
    }
}
?>