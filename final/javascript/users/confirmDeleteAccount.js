(function ($) {
    $(function () {
        $('#delete').click(function() {
			var x = confirm("Are you sure you want to delete your account?");
			if (x)
				return true;
			else
				return false;
		});
				
    });
}(jQuery));