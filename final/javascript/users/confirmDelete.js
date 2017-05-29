(function ($) {
    $(function () {
        $('#delete').click(function() {
			var x = confirm("Are you sure you want to delete your account?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#deleteCoord').click(function() {
			var x = confirm("Are you sure you want to delete this project?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#deleteProj').click(function() {
			var x = confirm("Are you sure you want to delete this project?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#adminDeleteProject').click(function() {
			var x = confirm("Are you sure you want to remove this project?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#leaveProject').click(function() {
			var x = confirm("Are you sure you want to leave this project?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#deleteTask').click(function() {
			var x = confirm("Are you sure you want to delete this task?");
			if (x)
				return true;
			else
				return false;
		});
		
		$('#leaveTask').click(function() {
			var x = confirm("Are you sure you want to leave this task?");
			if (x)
				return true;
			else
				return false;
		});
		
		
    });
}(jQuery));