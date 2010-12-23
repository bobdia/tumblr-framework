<?php

class Tumblr {
	
	public static $path = './blocks/';
	public static $postTypes = array(
		'Text',
		'Photo',
		'Photoset',
		'Quote',
		'Video',
		'Audio',
		'Link',
		'Chat',
		'Answer'
	);
	
	public static $autoPostBlocks = true;

	public static function block($name) {
		$f = self::$path.$name.'.php';
		if(file_exists($f)) {
			include $f;
		
		} else {
			echo '<!-- Block "'.$name.'" could not be found -->'."\r\n\r\n";
		}

	}

	public static function postBlocks() {
		foreach(self::$postTypes as $type) {
			$tpl = strtolower($type) .'.php';
			$n = "\r\n\r\n";
			
			if(self::$autoPostBlocks) { echo $n.'{block:'.$type.'}'.$n; }
			
			include self::$path.'post/'.$tpl;
			
			if(self::$autoPostBlocks) { echo $n.'{/block:'.$type.'}'.$n; }
		}
	}

}

?>