<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Mark the current menu item as active
 */
function is_active($page_name)
{
	$CI =& get_instance();
	if ($CI->uri->segment(2)===$page_name)
		$rtn = ' class="active"';
	else 
		$rtn ='';
	return $rtn;
}

?>
