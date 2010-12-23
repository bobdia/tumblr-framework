<div id="pagination">
{block:Pagination}
	{block:PreviousPage}
		<a href="{PreviousPage}">&#171; Previous</a>
	{/block:PreviousPage}

	{block:NextPage}
		<a href="{NextPage}">Next &#187;</a>
	{/block:NextPage}
{/block:Pagination}

{block:PermalinkPagination} 
	{block:PreviousPost}
	<a href="{PreviousPost}">&#171; Previous post</a>
	{/block:PreviousPost} 
	
	{block:NextPost}
	<a href="{NextPost}">Next post&#187;</a>
	{/block:NextPost} 
{/block:PermalinkPagination} 

{block:DayPagination}
	{block:PreviousDayPage}
	<a href="{PreviousDayPage}">&#171; {ShortMonth} {DayOfMonth}</a>
	{/block:PreviousDayPage}

	{block:NextDayPage}
	<a href="{NextDayPage}">{ShortMonth} {DayOfMonth} &#187;</a>
	{/block:NextDayPage}
{/block:DayPagination}
</div>