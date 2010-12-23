{block:TagPage}
<h2>Posts tagged &quot;{Tag}&quot;</h2>
{/block:TagPage}

{block:DayPage}
<h2>Posts for {DayOfMonth} {Month} {Year}</h2>
{/block:DayPage}

{block:SearchPage}
<h2>Posts matching &quot;{SearchQuery}&quot; <em>({SearchResultCount} results)</em></h2>
{/block:SearchPage}

{block:NoSearchResults}
<h2>Sorry, no posts matched &quot;{SearchQuery}&quot;</h2>
{/block:NoSearchResults}