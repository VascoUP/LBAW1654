function liAuth(){
        IN.User.authorize(function(){
			IN.API.Profile("me").fields("id,firstName,lastName,email-address").result(function (me) {
            var profile = me.values[0];
			var id = profile.id;
            var firstName = profile.firstName;
            var lastName = profile.lastName;
			
			var fName = firstName.replace(/\s+/g, '');
			var sName = lastName.replace(/\s+/g, '');
			
			var username = fName.toLowerCase() + sName.toLowerCase();
            var emailAddress = profile.emailAddress;
			
			$('input#username').val(username);	
			$('input#email').val(emailAddress);
		})
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
        
    }