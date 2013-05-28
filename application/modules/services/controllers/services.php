<?php
class Services extends Public_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['service'] = new Service(1);
        $this->template->build('index',$data);
    }
}
?>
