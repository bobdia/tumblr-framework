<div id="main" class="grid_18">

<?php Tumblr::block('pageTitle'); ?>

{block:Posts}

	<div class="postWrap{block:Odd} odd{/block:Odd}{block:Even} even{/block:Even}{block:NewDayDate} newDay{/block:NewDayDate}{block:SameDayDate} sameDay{/block:SameDayDate}{block:RebloggedFrom} reblogged{/block:RebloggedFrom}">
	
	<?php
	/******** Post blocks loop ********/
	Tumblr::postBlocks();
	?>

<?php Tumblr::block('readMore'); ?>
		
		<div class="postMeta">
			{block:IndexPage}
			<span class="postNotes">
				<a href="{Permalink}#notes" title="Notes"><strong>&hearts;</strong>{block:NoteCount} {NoteCount}{/block:NoteCount}</a>
			</span>
			{/block:IndexPage}
			
			<span class="postPermalink">
				<a href="{Permalink}" title="Permalink">&infin;</a>
			</span>
			
			{block:Date}
			<span class="postDate">
			{24HourWithZero}:{Minutes} &loz; <a href="/day/{Year}/{MonthNumberWithZero}/{DayOfMonthWithZero}">{DayOfMonthWithZero}/{MonthNumberWithZero}/{ShortYear}</a>
			</span>
			{/block:Date}
			
			<?php Tumblr::block('source'); ?>

			<?php Tumblr::block('reblog'); ?>

			<?php Tumblr::block('tags'); ?>

		</div>
	</div>
	
<?php Tumblr::block('notes'); ?>

<?php
/******** Insert interstitials ********
Tumblr::block('interstitial');
*/
?>	

{/block:Posts}

<?php Tumblr::block('pagination'); ?>

</div>

