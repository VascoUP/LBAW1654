(function ($) {
    $(function () {
        $(".dropdown-toggle").click(function () {
			$("#notification.dropdown-menu").hide();
			$("#menu.dropdown-menu").slideToggle();
        });
		
		$(".dropdown-notifications").click(function () {
			$("#notification.dropdown-menu").slideToggle();
			$("#menu.dropdown-menu").hide();
        });
    });
}(jQuery));
