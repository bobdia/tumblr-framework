<div class="post photo">
	<div class="photoWrap">
	{LinkOpenTag}
	<img src="{PhotoURL-500}" alt="{PhotoAlt}"/>
	{LinkCloseTag}<br/>
	{block:HighRes} 
	<a href="{PhotoURL-HighRes}">High-Res</a>
	{/block:HighRes} 
	</div>
	
	{block:Caption}
	<div class="caption">{Caption}</div>
	{/block:Caption}
</div>