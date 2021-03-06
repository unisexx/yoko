<?php

function login($username,$password)
{
    $password = encrypt_pass($password);
	$CI =& get_instance();
	$user = new User();
	$user->where(array('username'=>$username,'password'=>$password))->get();
	if($user->exists())
	{
		$CI->session->set_userdata('id',$user->id);
		$CI->session->set_userdata('level',$user->level_id);
		$CI->session->set_userdata('user_type',$user->user_type_id);
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function is_login()
{
	$CI =& get_instance();
	$user = new User($CI->session->userdata('id'));
	$id = $user->id;
	return ($id) ? true : false;
}

function user_login($id=FALSE)
{
    $CI =& get_instance();
    $id = ($id)?$id:$CI->session->userdata('id');
    $user = new User($id);
    return $user;
}

function user($id=FALSE)
{
    $CI =& get_instance();
    $id = ($id)?$id:$CI->session->userdata('id');
    $user = new User($id);
    return $user;
}

function logout()
{
	$CI =& get_instance();
	$CI->session->unset_userdata('id');
	$CI->session->unset_userdata('level');
	$CI->session->unset_userdata('user_type');
}

function is_owner($id)
{
    $CI =& get_instance();
    if($id == $CI->session->userdata('id') && $CI->session->userdata('id') != 0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

function permission($module, $action)
{
	$CI =& get_instance();
	$permission = new Permission();
	$perm = $permission->where("user_type_id = ".$CI->session->userdata('user_type')." and module = '".$module."'")->get();
	
	if($perm->$action){
		return TRUE;
	}else{
		return FALSE;
	}
}

function encrypt_pass($password){
    return md5(sha1($_POST['password']."secret"));
}
?>