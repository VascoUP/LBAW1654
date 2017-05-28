<link href="{$BASE_URL}css/pages/forum.css" rel='stylesheet'>
<link href="{$BASE_URL}css/pages/taskList.css" rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div id='profile-content' class='profile-content'>
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjID}" id="editForum"> Project </a>
	<h2>Forum</h2>
	<p>This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding the project. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
	{if $smartyThreads|@count != 0}
	<hr class='featurette-divider'>

	<div class='table-responsive'>
		<table class='table forum table-striped' id='page_table'>
			<thead>
				<tr>
					<th class='hidden-xs cell-stat'></th>
					<th><h3>Forums</h3></th>
					<th class='cell-stat text-center hidden-xs hidden-sm'>Creator</th>
					<th class='cell-stat text-center hidden-xs hidden-sm'>Comments</th>
					<th class='cell-stat hidden-xs hidden-sm'>Last Comment</th>
					<th class='column join button'></th>
					<th class="column report button"></th>
				</tr>
			</thead>
			<tbody>
			{for $i=0 to ($smartyThreads|@count-1)}
				<tr>
					<td class='hidden-xs text-center'><i class='fa fa-question fa-2x text-primary'></i></td>
					<td>
						<h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?projID={$smartyProjID}&forumID={$smartyThreads[$i]['threadid']}">{$smartyThreads[$i]['title']}</a><br></h4>
					</td>
					<td id = "threadUser" class='text-center hidden-xs hidden-sm'>{$usernames[$i]}</td>
					<td id = "threadNumber" class='text-center hidden-xs hidden-sm'>{$numberComments[$i]}</td>
				{if $numberComments[$i] == 0}
					<td id = "threadComments" class='text-center hidden-xs hidden-sm'>No comments</td>
				{else}
					<td class='posted by'>by <a href='#'> {$lastCommentUser[$i]}</a>
					<br><small><i class='fa fa-clock-o'></i> {$lastCommentDate[$i]}
					</small></td>
				{/if}
					<td>
						<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/editThread.php?projID={$smartyProjID}&forumID={$smartyThreads[$i]['threadid']}" id="editForum" type="button" class="btn btn-warning">Edit Forum</a>
					</td>
					<td>
						<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/report.php?projID={$smartyProjID}&threadID={$smartyThreads[$i]['threadid']}" type="button" class="btn btn-danger">Report Forum</a>
					</td>
				</tr>
			{/for}
			</tbody>
		</table>
	{/if}
	</div>
	<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/createForum.php?projID={$smartyProjID}" id="addForum" type="button" class="btn btn-success">Add Forum</a>
</div>
