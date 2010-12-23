<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php Tumblr::block('title'); ?></title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	{block:Description}
	<meta name="description" content="{MetaDescription}" />
	{/block:Description}

	<?php Tumblr::block('options'); ?>
	
	<link rel="shortcut icon" href="{Favicon}">
	<link rel="alternate" type="application/rss+xml" href="{RSS}">
	
	<?php Tumblr::block('misc/960assets'); ?>
	
	<style type="text/css">{CustomCSS}</style>
</head>

<body>
<div class="container_24">

<?php Tumblr::block('header'); ?>