<?php
class Portfolios extends Public_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['portfolios'] = new portfolio();
        $data['portfolios']->where('status','approve')->order_by('id','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['portfolio'] = new portfolio($id);
        $this->template->build('view',$data);
    }
    
    function inc_home(){
        $data['portfolios'] = new portfolio();
        $data['portfolios']->where('status','approve')->order_by('id','desc')->get(4);
        $this->load->view('inc_home',$data);
    }
    
}
?>