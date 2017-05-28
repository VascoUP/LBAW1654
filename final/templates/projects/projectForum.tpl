<link href="{$BASE_URL}css/pages/forum.css" rel='stylesheet'>
<link href="{$BASE_URL}css/pages/taskList.css" rel='stylesheet'>

<div id='profile-content' class='profile-content'>
	<h2>Forum</h2>
	<p>This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding the project. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
	{if $smartyThreads|@count != 0}
	<hr class='featurette-divider'>

	<div class='table-responsive'>
		<table class='table forum table-striped'>
			<thead>
				<tr>
					<th class='hidden-xs cell-stat'></th>
					<th>Forums</th>
					<th class='cell-stat text-center hidden-xs hidden-sm'>Creator</th>
					<th class='cell-stat text-center hidden-xs hidden-sm'>Comments</th>
					<th class='cell-stat hidden-xs hidden-sm'>Last Comment</th>
					{if $userIsCoord}
					<th class='column join button'></th>
					{elseif $collaborator}
					<th class="column report button"></th>
					{/if}
				</tr>
			</thead>
			<tbody>
			{for $i=0 to ($smartyThreads|@count-1)}
				<tr>
					<td class='hidden-xs text-center'><i class='fa fa-question fa-2x text-primary'></i></td>
					<td>
						<h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?projID={$smartyProjID}&forumID={$smartyThreads[$i]['threadid']}">{$smartyThreads[$i]['title']}</a><br></h4>
					</td>
					<td class='text-center hidden-xs hidden-sm threadUser'>{$usernames[$i]}</td>
					<td class='text-center hidden-xs hidden-sm threadNumber'>{$numberComments[$i]}</td>
				{if $numberComments[$i] == 0}
					<td id = "threadComments" class='text-center hidden-xs hidden-sm'>No comments</td>
				{else}
					<td class='posted by'>by <a href='#'> {$lastCommentUser[$i]}</a>
					<br><small><i class='fa fa-clock-o'></i> {$lastCommentDate[$i]}
					</small></td>
				{/if}
				{if $userIsCoord}
					<td>   
						<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/editThread.php?projID={$smartyProjID}&forumID={$smartyThreads[$i]['threadid']}" class="btn btn-warning forum">Edit Forum</a>
					</td>
				{elseif $collaborator}
					<td>
						<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/report.php?projID={$smartyProjID}&threadID={$smartyThreads[$i]['threadid']}" class="btn btn-danger">Report Forum</a>
					</td>
				{/if}
				</tr>
			{/for}
			</tbody>
		</table>
	</div>
	{/if}
	{if $userIsCoord || $collaborator}
	<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/createForum.php?projID={$smartyProjID}" id="addForum" class="btn btn-success">Add Forum</a>
	{/if}
</div>