<?php
class Portfolios extends Admin_Controller
{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['portfolios'] = new Portfolio();
        $data['portfolios']->order_by('id','desc')->get_page();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
        $data['portfolio'] = new Portfolio($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST)
        {
            $portfolio = new Portfolio($id);
            if($_FILES['image']['name'])
            {
                if($portfolio->id){
                    $portfolio->delete_file($portfolio->id,'uploads/portfolio','image');
                }
                $_POST['image'] = $portfolio->upload($_FILES['image'],'uploads/portfolio/');
            }
            $portfolio->from_array($_POST);
            $portfolio->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('portfolios/admin/portfolios');
    }
    
    function delete($id=FALSE)
    {
        if($id)
        {
            $portfolio = new Portfolio($id);
            $portfolio->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect('portfolios/admin/portfolios');
    }
    
    function approve($id)
    {
        if($_POST)
        {
            $portfolio = new Portfolio($id);
            $portfolio->from_array($_POST);
            $portfolio->save();
        }

    }
}
?>