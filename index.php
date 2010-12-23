<?php

include 'config.php';

ob_start();

include 'header.php';
/*
	options.php
*/

include 'main.php';
/*
	/post/TYPE.php
	pagination.php
*/

include 'sidebar.php';
/*
	/block/BLOCK.php
		navigation.php
		description.php
		submissions.php
		search.php
		pagelist.php

*/

include 'footer.php';
/*
		following.php
		likes.php
		twitter.php
*/

$theme = ob_get_contents();
file_put_contents('theme.txt', $theme);
ob_end_clean();

echo 'The theme has been saved in <a href="theme.txt">theme.txt</a> <br/>';

?>