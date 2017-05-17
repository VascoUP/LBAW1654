<link href="{$BASE_URL}css/pages/thread.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
	{if $smartyTaskID}
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?taskID={$smartyTaskID}"> Task </a>
	{/if}
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/projectForum.php?projID={$smartyProjID}"> Forums </a>
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjID}"> Project </a>
        <div class="blog-comment">
        <h3>Comments</h3>
		<div id="placeComments">
		{if $smartyComments|@count != 0 }
        <ul class="comments">
			{for $i=0 to ($smartyComments|@count - 1)}
            <li class="clearfix">
			{if $smartyUserInformation[$i]['photo']}
            <img src="{$BASE_URL}images/users/{$smartyUserInformation[$i]['photo']}" class="avatar" alt="">
			{else}
			<img src="http://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
			{/if}
            <div class="post-comments">
                <p class="meta">{$smartyComments[$i]['date']}  <a href="#">{$smartyUserInformation[$i]['username']}</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                <p>
                {$smartyComments[$i]['content']}
                </p>
            </div>
			{/for}
            </li>
        </ul>
		
		<div id="second">
			<p hidden id='hdnSession'>{$smartyUsrInfo['0']['username']}</p>
			<textarea class="form-control form-style" rows="5" cols="30" id="middle" name="Reply">Reply</textarea>
			<button type="button" id="inner_reply">Reply</button>
		</div>
		
		{else}
		<div id="second2">
			<p hidden id='hdnSession'>{$smartyUsrInfo['0']['username']}</p>
			<textarea class="form-control form-style" rows="5" cols="30" id="middleComment" name="Comment">Comment</textarea>
			<button type="button" id="inner_comment">Comment</button>
		</div>
		{/if}
        </div>
    </div>
</div>
</div>

<script src="{$BASE_URL}javascript/users/comment.js"></script>