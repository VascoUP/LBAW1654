(function ($) {
    $(function () {
        $(".dropdown-toggle").click(function () {
			$("#menu.dropdown-menu").slideToggle();
        });
		
		$(".dropdown-notifications").click(function () {
			$("#notification.dropdown-menu").slideToggle();
        });
    });
}(jQuery));
