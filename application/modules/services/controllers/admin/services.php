<?php
Class Services extends Admin_Controller{
    
    function __construct(){
        parent::__construct();  
    }
    
    function form($id=1){
        $data['service'] = new Service($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=1)
    {
        if($_POST){
            $service = new Service($id);
            $service->from_array($_POST);
            $service->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('services/admin/services/form/'.$id);
    }
    
}
?>