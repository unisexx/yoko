<?php
class Service extends ORM
{
    public $table = 'services';
    
    public function __construct($id = NULL)
    {
        parent::__construct($id);
    }
    
}
?>