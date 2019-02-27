<?php 

if (! function_exists('set_active')) {
	function set_active($path, $active = 'active')
	{
		return Request::is($path) ? $active : '';
	}
}