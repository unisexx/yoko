<?php
Class Addresses extends Admin_Controller{
    
    function __construct(){
        parent::__construct();  
    }
    
    function form($id=1){
        $data['address'] = new Address($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=1)
    {
        if($_POST){
            $address = new Address($id);
            $address->from_array($_POST);
            $address->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('addresses/admin/addresses/form/'.$id);
    }
    
}
?>