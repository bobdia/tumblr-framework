<div class="post chat">
	{block:Title}
	<h3><a href="{Permalink}">{Title}</a></h3>
	{/block:Title}

	<ul>
		{block:Lines}
		<li class="{Alt} user_{UserNumber}">
			{block:Label}
			<span class="label">{Label}</span>
			{/block:Label}

			{Line}
		</li>
		{/block:Lines}
	</ul>
</div>

