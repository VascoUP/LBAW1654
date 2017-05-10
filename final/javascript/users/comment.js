(function ($) {
    $(function () {
        $('.pull-right').click(function() {
			$('#middle').show();
			$('#inner_reply').show();
		});
		
		$('#inner_reply').click(function(){
			var parent = $(this).parent()
			var forumid = parseInt($(this).siblings('.forumID').text());
			var userid = parseInt($(this).siblings('.userID').text());
			var comment = true;
			$.post("api/comment", { comment: comment, userID: userid, forumID: forumid })
				.done(function() {
					alert("success");
				})
				.fail(function() {
					alert("error");
				})
				.always(function() {
					alert("finished");
				});
		}
    });
}(jQuery));