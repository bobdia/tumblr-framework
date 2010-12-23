<div class="post audio">
		<div class="audioWrap">
		{AudioPlayerBlack}
		</div>
		<div class="audioMeta">
		<em>{PlayCountWithLabel}</em> {block:ExternalAudio} &mdash; <a href="{ExternalAudioURL}">Download</a>{/block:ExternalAudio}
		<?php
		/********** ID3 METADATA **************
		{block:AlbumArt}<img src="{AlbumArtURL}" alt="album art"/><br/>{/block:AlbumArt}
		{block:Artist}{Artist}{/block:Artist}{block:Album} &mdash; {Album}{/block:Album}
		{block:TrackName}<br/>Track: {TrackName}{/block:TrackName}
		*/
		?>
		</div>
		{block:Caption}
		<div class="caption">{Caption}</div>
		{/block:Caption}
</div>