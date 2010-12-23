<div id="header" class="grid_24">
{block:IfHeaderIMGImage}
<div id="headerImage">
	<a href="/">
	<img src="{image:Header IMG}" alt="header" />
	</a>
</div>
{/block:IfHeaderIMGImage}

{block:IfShowTitle}
<h1><a href="/">{Title}</a></h1>
{/block:IfShowTitle}

{block:IfSubtitle}
<div id="subtitle">{text:Subtitle}</div>
{/block:IfSubtitle}
</div>