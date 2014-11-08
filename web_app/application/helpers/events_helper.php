<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Truncate the description neatly, to the word closest to a certain number of characters
 */
function truncate($description)
{
	$desiredWidth = 260;
	$parts = preg_split('/([\s\n\r]+)/', $description, null, PREG_SPLIT_DELIM_CAPTURE);
	$parts_count = count($parts);

	$length = 0;
	$last_part = 0;
	for (; $last_part < $parts_count; ++$last_part) {
		$length += strlen($parts[$last_part]);
		if ($length > $desiredWidth) { break; }
	}
	return implode(array_slice($parts, 0, $last_part));
}

/*
 * Tidy up the dates so they look neat
 */
function prettyPrintDate($startTime, $endTime)
{
	// Convert to Unix dates.
	$startTime = strtotime($startTime);
	$endTime = strtotime($endTime);
	if (empty($endTime))
	{
		return date("l jS F g:i a.", $startTime);
	}
	else
	{
		if (($startTime + 86400) > $endTime)// it is less than 24 hours long
		{
			return date("l jS F g:i a.", $startTime)." - ".date("g:i a.", $endTime);
		}
		else 
		{
			return date("l jS F", $startTime)." - ".date("l jS F", $endTime);
		}
	}
}

/*
 * 
 */
function htmlallentities($str){
	$res = '';
	$strlen = strlen($str);
	for($i=0; $i<$strlen; $i++){
		$byte = ord($str[$i]);
		if($byte < 128) // 1-byte char
			$res .= $str[$i];
		elseif($byte < 192); // invalid utf8
		elseif($byte < 224) // 2-byte char
		$res .= '&#'.((63&$byte)*64 + (63&ord($str[++$i]))).';';
		elseif($byte < 240) // 3-byte char
		$res .= '&#'.((15&$byte)*4096 + (63&ord($str[++$i]))*64 + (63&ord($str[++$i]))).';';
		elseif($byte < 248) // 4-byte char
		$res .= '&#'.((15&$byte)*262144 + (63&ord($str[++$i]))*4096 + (63&ord($str[++$i]))*64 + (63&ord($str[++$i]))).';';
	}
	return $res;
}

?>