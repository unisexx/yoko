<?php
class User extends ORM
{
	public $table = "users";
	
	public $has_one = array("level");
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>