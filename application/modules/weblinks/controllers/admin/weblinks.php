<?php
	
class Weblinks extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		$data['weblinks'] = new Weblink();
		$data['weblinks']->order_by('id','desc')->get_page();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['weblinks'] = new Weblink($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$weblink = new Weblink($id);
			$weblink->from_array($_POST);
			$weblink->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
		
	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$weblink = new Weblink($id);
			$weblink->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
    
    function approve($id)
    {
        if($_POST)
        {
            $weblink = new Weblink($id);
            $weblink->from_array($_POST);
            $weblink->save();
        }

    }
}

?>