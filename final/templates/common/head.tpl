<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{$BASE_URL}/images/assets/pageIcon.jpg"}>

		<title>YM</title>
		
		<script type="text/javascript" src="//platform.linkedin.com/in.js">
			api_key: 77kxu7awkxp106
			authorize: true
    onLoad: onLinkedInLoad
	</script>
	<script type="text/javascript">
	function liAuth(){
        IN.User.authorize(function(){
        });
    }
	// Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        console.log(data);
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~").result(onSuccess).error(onError);
    }
</script>