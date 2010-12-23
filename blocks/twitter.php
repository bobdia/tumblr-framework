{block:Twitter}
    <div id="twitter" style="display:none;">
        <h3><a href="http://twitter.com/{TwitterUsername}">Latest Tweets</a></h3>
        
        <div id="tweets"></div>        
    </div>
    
    <script type="text/javascript">
        function recent_tweets(data) {
            for (i=0; i<data.length; i++) {
                document.getElementById("tweets").innerHTML = 
                    document.getElementById("tweets").innerHTML + 
                    '<a href="http://twitter.com/{TwitterUsername}/status/' + 
                    data[i].id + '"><div class="content">' + data[i].text + 
                    '</div></a>';
            }
            document.getElementById("twitter").style.display = 'block';
        }
    </script>
{/block:Twitter}
      
<!-- Put this at the bottom of the page -->
{block:Twitter}
    <script type="text/javascript" src="/tweets.js"></script>
{/block:Twitter}
