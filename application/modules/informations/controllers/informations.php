<?php
class Informations extends Public_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['informations'] = new Information();
        $data['informations']->where('status','approve')->order_by('id','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['information'] = new Information($id);
        $this->template->build('view',$data);
    }
    
    function inc_home(){
        $data['informations'] = new Information();
        $data['informations']->where('status','approve')->order_by('id','desc')->get(4);
        $this->load->view('inc_home',$data);
    }
}
?>