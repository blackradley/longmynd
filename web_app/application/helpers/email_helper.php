<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Send a message to the webmaster.  This only works if the from address
 * matched the address of the AppFog user.
 */
function tell_webmaster($message)
{
	$CI =& get_instance();
	$CI->load->library('email');
	$CI->email->from('joe_collins@blackradley.com');
	$CI->email->to('webmaster@doningtonleheath.org.uk');
	$CI->email->subject('Message from doningtonleheath.org.uk');
	$CI->email->message($message);
	$CI->email->send();
}
?>