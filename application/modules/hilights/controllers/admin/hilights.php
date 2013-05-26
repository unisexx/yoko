<?php
class Hilights extends Admin_Controller
{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['hilights'] = new Hilight();
        $data['hilights']->order_by('id','desc')->get();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
        $data['hilight'] = new Hilight($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST)
        {
            $hilight = new Hilight($id);
            if($_FILES['image']['name'])
            {
                if($hilight->id){
                    $hilight->delete_file($hilight->id,'uploads/hilight','image');
                }
                $_POST['image'] = $hilight->upload($_FILES['image'],'uploads/hilight/');
            }
            $hilight->from_array($_POST);
            $hilight->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('hilights/admin/hilights');
    }
    
    function delete($id=FALSE)
    {
        if($id)
        {
            $hilight = new Hilight($id);
            $hilight->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect('hilights/admin/hilights');
    }
    
    function approve($id)
    {
        if($_POST)
        {
            $hilight = new Hilight($id);
            $hilight->from_array($_POST);
            $hilight->save();
        }

    }
}
?>