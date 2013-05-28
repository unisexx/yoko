<?php
class Informations extends Admin_Controller
{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['informations'] = new Information();
        $data['informations']->order_by('id','desc')->get_page();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
        $data['information'] = new Information($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST)
        {
            $information = new Information($id);
            if($_FILES['image']['name'])
            {
                if($information->id){
                    $information->delete_file($information->id,'uploads/information','image');
                }
                $_POST['image'] = $information->upload($_FILES['image'],'uploads/information/');
            }
            $information->from_array($_POST);
            $information->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('informations/admin/informations');
    }
    
    function delete($id=FALSE)
    {
        if($id)
        {
            $information = new Information($id);
            $information->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect('informations/admin/informations');
    }
    
    function approve($id)
    {
        if($_POST)
        {
            $information = new Information($id);
            $information->from_array($_POST);
            $information->save();
        }

    }
}
?>