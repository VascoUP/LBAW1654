<link href="{$BASE_URL}css/pages/thread.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">

        <div class="blog-comment">
        <h3>Comments</h3>
		{if $smartyComments|@count != 0}
        <ul class="comments">
			{for $i=0 to ($comments|@count - 1)}
            <li class="clearfix">
			{if isset($smartyUserInformation[$i]['photo'])}
            <img src="{$BASE_URL}images/users/{$smartyUserInformation[$i]['photo']}" class="avatar" alt="">
			{else}
			<img src="http://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
			{/if}
            <div class="post-comments">
                <p class="meta">{@comments[$i]['date']}<a href="#">$smartyUserInformation[$i]['username']</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                <p>
                {$comment[$i]['content']}
                </p>
            </div>
            </li>
			{/for}
			{if $smartyComments|@count == 0}
				<div id="second">
				<textarea class="form-control form-style" rows="5" cols="30" id="middle" name="Reply">Comment</textarea>
				<button type="button" id="inner_reply">Reply</button>
				</div>
			{else}
				<div id="second">
				<textarea class="form-control form-style" rows="5" cols="30" id="middle" name="Reply">Reply</textarea>
				<button type="button" id="inner_reply">Reply</button>
				</div>
			{/if}
        </ul>
		{/if}
        </div>
    </div>
</div>
</div>

<script src="{$BASE_URL}javascript/users/comment.js"></script>