<?php
function image_url($url = FALSE) {
	$urls = explode(',', $url);
	$rand = rand(0, (count($urls) - 1));
	$url = ltrim($urls[$rand],".");
	return $url;
}
?>