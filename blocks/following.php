{block:IfShowpeopleIfollow}
{block:Following}
<div id="following">
<h3>Following:</h3>
	<ul>
	{block:Followed}
		<li>
		<a href="{FollowedURL}" title="{FollowedName}"><img src="{FollowedPortraitURL-48}"alt="{FollowedName}" /></a>
		</li>
	{/block:Followed}
	</ul>
</div>
{/block:Following}
{/block:IfShowpeopleIfollow}