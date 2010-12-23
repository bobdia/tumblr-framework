{block:Following}
<div id="follow_page">
	<h2>Blogs I follow</h3>

	{block:Followed}
		<div>
		<h4>{FollowedName}</h4>
		<a href="{FollowedURL}" title="{FollowedName}"><img src="{FollowedPortraitURL-128}"alt="{FollowedName}" /></a>
		<br/>
		<a href="{FollowedURL}">{FollowedTitle}</a>
		</div>
	{/block:Followed}
</div>
{/block:Following}